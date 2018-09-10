<?php
require_once '../../funcoes/funcoes.php';
session_start();
include '../../connect/conn.php';
$textData = $_POST['text'];
$subjData = $_POST['assunto'];
$toData = $_POST['destinatario'];
$today='';
$hours=date('d/m/Y');

$Number_mes = date('m');
if ($Number_mes < 10){
  $sub=substr($Number_mes, 1);
}else {
  $sub=$Number_mes = date('m');
}
$messes = mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$sub'"));
$depois_do_mes = date(" Y, H:i:s",time()-3600);
$antes_do_mes = date("j ");

$today.=''.$antes_do_mes.$messes["mes"].$depois_do_mes;

$dados = mysqli_fetch_assoc(mysqli_query($conn,"SELECT email FROM trabalhadores  WHERE idtrabalhador='$_SESSION[idtrabalhador]'"));
$dado = mysqli_fetch_assoc(mysqli_query($conn,"SELECT email FROM trabalhadores  WHERE email = '$toData'"));

$hoData=$dados['email'];
if(!$dado){
    echo'Não existe o email do destinatario';
}else {
  mysqli_query($conn, "INSERT INTO notificacoes (assunto,texto,estado,emailremetente,emaildestinatario,data_envio,hours_notifics) VALUES ('$subjData','$textData',0,'$hoData','$toData','$today','$hours')");
  echo'Sucesso';
}
?>

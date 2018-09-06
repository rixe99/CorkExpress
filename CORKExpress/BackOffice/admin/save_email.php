<?php
$textData = $_POST['text'];
$subjData = $_POST['assunto'];
$toData = $_POST['destinatario'];
$hoData = $_POST['remetente'];

include '../../connect/conn.php';
$dados=mysqli_fetch_assoc(mysqli_query($conn,"SELECT email from trabalhadores where email = '$toData'"));

if(!$dados){
    echo'Não existe o email do destinatario';
}else {
  mysqli_query($conn, "INSERT INTO notificacoes (assunto,texto,estado,emailremetente,emaildestinatario) VALUES ('$subjData','$textData',0,'$hoData','$toData') ");
  echo'Sucesso';
}
?>

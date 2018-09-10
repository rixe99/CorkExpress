<?php
$id = $_POST['id'];
$output = '';
include '../../connect/conn.php';
mysqli_query($conn,"UPDATE notificacoes SET estado = '1' WHERE idnotifics = '$id'");
$dados=mysqli_fetch_assoc(mysqli_query($conn,"SELECT idnotifics, texto, assunto, emailremetente, emaildestinatario, data_envio FROM notificacoes WHERE idnotifics = '$id' "));


$output .= '<div class="mailbox-read-info">
  <h3>'.$dados["assunto"].'</h3>
  <h5>From: '.$dados["emailremetente"].'
    <span class="mailbox-read-time pull-right">'.$dados["data_envio"].'</span></h5>
</div>
<div class="form-control" contentEditable style="height: 500px; overflow-y: scroll;">'.$dados["texto"].'</div>';

echo $output;
?>

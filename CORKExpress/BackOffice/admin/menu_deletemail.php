<?php
$id = $_POST['id'];
$output = '';
include '../../connect/conn.php';
mysqli_query($conn, "DELETE FROM notificacoes WHERE idnotifics = '$id'");

echo "Eliminado com sucesso a mensagem";
include '../../connect/deconn.php';
 ?>

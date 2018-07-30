<?php
$user="root";
$pass="";
$server="localhost";

//estabelecer a ligação a base de dados
$conn = mysqli_connect($server, $user, $pass );
//caso haja erro reportar
if(!$conn){
  die("Erro de Ligacao:" .mysqli_connect_error());
}
mysqli_select_db($conn, "corkexpress");
mysqli_set_charset($conn, "utf8");//utf8 e dos tugas

 ?>

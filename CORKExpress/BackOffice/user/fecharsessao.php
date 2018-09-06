<?php
session_start();
$_SESSION["logo"]=2;
session_destroy();
echo '<meta http-equiv="refresh" content="0;url=../Login.php">';
 ?>

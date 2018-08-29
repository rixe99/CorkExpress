<?php
      include '../../connect/conn.php';
      $idtrabalhador = $_REQUEST["idtrabalhador"];
      mysqli_query($conn, "DELETE FROM trabalhadores WHERE idtrabalhador = '$idtrabalhador'");
      echo '<meta http-equiv="refresh" content="0;url=admin.php?an=8">';
 ?>

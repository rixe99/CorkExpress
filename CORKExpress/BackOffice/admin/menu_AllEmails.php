<?php
  include '../../connect/conn.php';
  $tipo = $_POST['tipo'];
  $output = '';
    $dados =mysqli_query($conn,"SELECT nome, apelido, categoria, email FROM trabalhadores WHERE tipouser = $tipo ORDER BY nome");
       while ($rows=mysqli_fetch_assoc($dados)){
         $output .= '
           <tr>
           <td style="width:150px">'. $rows['nome']. '</td>
           <td style="width:150px">'. $rows['apelido']. '</td>
           <td style="width:150px">'. $rows['email']. '</td>
           <td style="width:150px">'. $rows['categoria']. '</td>
           </tr>';
       }
       echo $output;
 ?>

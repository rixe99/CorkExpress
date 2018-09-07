<?php
  include '../../connect/conn.php';
  $tipo = $_POST['tipo'];
  $output = '';
  if($tipo == 1){
      $dados =mysqli_query($conn,"SELECT nome, apelido, categoria, email FROM trabalhadores WHERE tipouser = $tipo ORDER BY nome");
  }else {
    $dados =mysqli_query($conn,"SELECT nome, apelido, categoria, email FROM trabalhadores WHERE tipouser = $tipo ORDER BY nome");
  }
       while ($rows=mysqli_fetch_assoc($dados)){
         $output .= '
         <tr>
           <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
           <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
           <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
           <td class="mailbox-date">11 hours ago</td>
         </tr>';
       }
       echo $output;
 ?>

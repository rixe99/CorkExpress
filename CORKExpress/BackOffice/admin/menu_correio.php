<?php
  include '../../connect/conn.php';
  $tipo = $_POST['tipo'];
  $output = '';
  if ($tipo == 1){
    $dados =mysqli_query($conn,"SELECT notificacoes.idnotifics, trabalhadores.nome, trabalhadores.apelido, notificacoes.texto, notificacoes.assunto  FROM trabalhadores inner JOIN notificacoes ON trabalhadores.email = notificacoes.emaildestinatario WHERE notificacoes.emaildestinatario = 'hencanacao@pp.oo' ");
  }
  if ($tipo == 0){
    $dados =mysqli_query($conn,"SELECT notificacoes.idnotifics, trabalhadores.nome, trabalhadores.apelido, notificacoes.texto, notificacoes.assunto  FROM trabalhadores inner JOIN notificacoes ON trabalhadores.email = notificacoes.emaildestinatario WHERE notificacoes.emailremetente = 'hencanacao@pp.oo' ");
  }
       while ($rows=mysqli_fetch_assoc($dados)){
         $sub=substr($rows['texto'], 0, 50);
         $output .= '
         <tr>
           <td class="mailbox-star"><a href="#"><i class="fa fa-trash-o text-yellow"></i></a></td>
           <td class="mailbox-name"><a href="#" onclick="entrar('.$rows['idnotifics'].')">&nbsp;'.$rows['nome'].'&nbsp;'.$rows['apelido'].'</a></td>
           <td class="mailbox-subject"><b>&nbsp;'.$rows['assunto'].'</b> - '.$sub.'...</td>
           <td class="mailbox-date">11&nbsp;hours&nbsp;ago</td>
         </tr>';
       }
       echo $output;
 ?>

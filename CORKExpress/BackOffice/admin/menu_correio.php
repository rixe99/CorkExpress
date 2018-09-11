<?php
require_once '../../funcoes/funcoes.php';
session_start();
  include '../../connect/conn.php';
  $tipo = $_POST['tipo'];
  $output = '';

  $dados = mysqli_fetch_assoc(mysqli_query($conn,"SELECT email FROM trabalhadores  WHERE idtrabalhador='$_SESSION[idtrabalhador]'"));
  if ($tipo == 1){
    $dado =mysqli_query($conn,"SELECT notificacoes.idnotifics, trabalhadores.nome, trabalhadores.apelido, notificacoes.texto, notificacoes.assunto, notificacoes.hours_notifics  FROM trabalhadores inner JOIN notificacoes ON trabalhadores.email = notificacoes.emailremetente WHERE notificacoes.emaildestinatario = '$dados[email]' AND notificacoes.emailremetente != '$dados[email]' ");
    while ($rows=mysqli_fetch_assoc($dado)){
      $sub=substr($rows['texto'], 0, 40);
      $output .= '
      <tr>
        <td class="mailbox-star"><a href="#" onclick="deletet('.$rows['idnotifics'].')"><i class="fa fa-trash-o text-yellow"></i></a></td>
        <td class="mailbox-name"><a href="#" onclick="entrar('.$rows['idnotifics'].',1)">&nbsp;'.$rows['nome'].'&nbsp;'.$rows['apelido'].'</a></td>
        <td class="mailbox-subject"><b>&nbsp;'.$rows['assunto'].'</b> - '.$sub.'...</td>
        <td class="mailbox-date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$rows['hours_notifics'].'</td>
      </tr>';
    }
  }
  if ($tipo == 0){
    $dado =mysqli_query($conn,"SELECT notificacoes.idnotifics, trabalhadores.nome, trabalhadores.apelido, notificacoes.texto, notificacoes.assunto, notificacoes.hours_notifics  FROM trabalhadores inner JOIN notificacoes ON trabalhadores.email = notificacoes.emaildestinatario WHERE notificacoes.emailremetente = '$dados[email]' ");
    while ($rows=mysqli_fetch_assoc($dado)){
      $sub=substr($rows['texto'], 0, 40);
      $output .= '
      <tr>
        <td class="mailbox-star"><a href="#" onclick="deletet('.$rows['idnotifics'].')"><i class="fa fa-trash-o text-yellow"></i></a></td>
        <td class="mailbox-name"><a href="#" onclick="entrar('.$rows['idnotifics'].',0)">&nbsp;'.$rows['nome'].'&nbsp;'.$rows['apelido'].'</a></td>
        <td class="mailbox-subject"><b>&nbsp;'.$rows['assunto'].'</b> - '.$sub.'...</td>
        <td class="mailbox-date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$rows['hours_notifics'].'</td>
      </tr>';
    }
  }
       echo $output;
       include '../../connect/deconn.php';
 ?>

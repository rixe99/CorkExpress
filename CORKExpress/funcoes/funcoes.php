<?php

function login($username,$password){
  if(empty($username) || empty($password)){
    echo '<span class="">Insira os dados</span>';
  }
    else{
      include '../connect/conn.php';

      $q = mysqli_query($conn, "SELECT username, password, tipouser, idtrabalhador
        FROM trabalhadores
         WHERE username = '$username' AND password = '$password'");
      $a = mysqli_fetch_array($q);

      if(!$a){
        echo 'Erro: Dados errados';
      }
      else{
        //Arranca sessão e cria variaveis de sessão com os dados retornados sa query
        session_start();
        $_SESSION["idtrabalhador"] = $a["idtrabalhador"];
        $_SESSION["tipouser"] = $a["tipouser"];
        $_SESSION["username"] = $a["username"];
        $_SESSION["logo"]=1;
        //Encaminhar utilizador para painel admin
        if($a["tipouser"]==1){
          echo '<meta http-equiv="refresh"
              content="0;url=admin/admin.php">';
        }else{
          echo '<meta http-equiv="refresh"
              content="0;url=user/user.php">';
        }
      }
      include '../connect/deconn.php';
    }
  }


  function validar(){
    if(!$_SESSION["idtrabalhador"]){
      echo '<meta http-equiv="refresh" content="0;url=Login.php">';
    }
  }


  function confirma(){
    if (@$_SESSION["logo"]==1){
      if(@$_SESSION["tipouser"]==0){
        echo '<meta http-equiv="refresh" content="0;url=user/user.php">';
      }
      if(@$_SESSION["tipouser"]==1){
        echo '<meta http-equiv="refresh" content="0;url=admin/admin.php">';
      }
    }
  }

 ?>

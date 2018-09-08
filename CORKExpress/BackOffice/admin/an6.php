<center>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <strong>Update dados  do </strong> trabalhador
          </div>
          <div class="card-body card-block">
            <?php
            include '../../connect/conn.php';
              @$editar = $_REQUEST["editar"];
                $dados = mysqli_fetch_array(mysqli_query($conn, "SELECT nome, apelido, nif, nib, niss ,categoria, morada, email, password, username  FROM trabalhadores WHERE  idtrabalhador ='$editar'"));
              ?>
              <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nome:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nome" value ="<?php echo ''.$dados["nome"].''; ?>" placeholder="Nome" class="form-control">
                  </div>
              </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Apelido:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="apelido"value ="<?php echo ''.$dados["apelido"].''; ?>" placeholder="Apelido" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                      <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">Morada:</label>
                      </div>
                      <div class="col-12 col-md-9">
                          <input type="text" id="text-input" name="morada" value ="<?php echo ''.$dados["morada"].''; ?>" placeholder="Morada" class="form-control">
                      </div>
                  </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Email:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email-input" name="email" value ="<?php echo ''.$dados["email"].''; ?>" placeholder="Enter Email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                      <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">Niss:</label>
                      </div>
                      <div class="col-12 col-md-9">
                          <input type="number" id="text-input" name="niss" value ="<?php echo ''.$dados["niss"].''; ?>" placeholder="Niss" class="form-control">
                      </div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nib:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="text-input" name="nib" value ="<?php echo ''.$dados["nib"].''; ?>" placeholder="Nib" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Nif:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="number" id="text-input" name="nif" value ="<?php echo ''.$dados["nif"].''; ?>" placeholder="Nif" class="form-control">
                          </div>
                      </div>
                  <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Categoria do trabalhador:</label>
                      </div>
                    <div class="col-12 col-md-9">
                        <select name="categoria" id="select" class="form-control">
                          <?php
                            if ($dados["categoria"] == "Finanças"){
                              echo '
                              <option value="Finanças">Finanças</option>
                              <option value="Operador">Operador</option>
                              <option value="I.T" >I.T</option>';
                            }
                            elseif ($dados["categoria"] == "Operador") {
                              echo '
                              <option value="Operador">Operador</option>
                              <option value="Finanças">Finanças</option>
                              <option value="I.T" >I.T</option>';
                            }
                            elseif ($dados["categoria"] == "I.T") {
                              echo '
                              <option value="I.T" >I.T</option>
                              <option value="Finanças">Finanças</option>
                              <option value="Operador">Operador</option>';
                            }
                          ?>
                          <?php
                          if(isset($_POST['categoria'])){
                            $categoria=$_POST['categoria'];
                          }  ?>
                        </select>
                    </div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Username:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="username" value ="<?php echo ''.$dados["username"].''; ?>" placeholder="Username" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Password:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="password" value ="<?php echo ''.$dados["password"].''; ?>" placeholder="Password" class="form-control">
                          </div>
                      </div>
          <div class="card-footer">
              <button type="submit" name="update" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Update
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
              </button>
          </div>
        </form>
        <?php
        if(isset($_POST["update"])){
          include '../../connect/conn.php';
          $user=mysqli_fetch_array(mysqli_query($conn,"SELECT username FROM trabalhadores WHERE username='$_POST[username]' and idtrabalhador !='$editar'"));
          $email=mysqli_fetch_array(mysqli_query($conn,"SELECT email FROM trabalhadores WHERE email='$_POST[email]' and idtrabalhador !='$editar'"));
          $nib=mysqli_fetch_array(mysqli_query($conn,"SELECT nib FROM trabalhadores WHERE nib='$_POST[nib]' and idtrabalhador !='$editar'"));
          $niss=mysqli_fetch_array(mysqli_query($conn,"SELECT niss FROM trabalhadores WHERE niss='$_POST[niss]' and idtrabalhador !='$editar'"));
          $nif=mysqli_fetch_array(mysqli_query($conn,"SELECT nif FROM trabalhadores WHERE nif='$_POST[nif]' and idtrabalhador !='$editar'"));
          if(!$user && !$email && !$nib && !$niss && !$nif){
            mysqli_query($conn, "UPDATE trabalhadores SET nome = '$_POST[nome]', apelido = '$_POST[apelido]', nif = '$_POST[nif]', nib = '$_POST[nib]', niss = '$_POST[niss]', categoria = '$_POST[categoria]', morada = '$_POST[morada]', email = '$_POST[email]',password = '$_POST[password]', username = '$_POST[username]' WHERE idtrabalhador = '$editar'");
            echo 'sucesso';
            echo '<meta http-equiv="refresh"
                content="0;url=admin.php">';
          include '../../connect/deconn.php';
        }
            else{
              if($user){
                echo 'Ja tem user';
              }
              if($email){
                echo'Ja tem email';
              }
              if($nib){
                echo'Ja tem nib';
              }
              if($niss){
                echo 'Ja tem niss';
              }
              if($nif){
                echo 'Ja tem nif';
              }
            }
          }
         ?>
      </div>
  </div>
<center>

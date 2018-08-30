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
                      <div id="text-input" name="nome" placeholder="Nome" class="form-control"><?php echo ''.$dados["nome"].''; ?></div>
                  </div>
              </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Apelido:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div id="text-input" name="apelido" placeholder="Apelido" class="form-control"><?php echo ''.$dados["apelido"].''; ?></div>
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
                          <div id="text-input" name="niss" placeholder="Niss" class="form-control"><?php echo ''.$dados["niss"].''; ?></div>
                      </div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nib:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <div id="text-input" name="nib" placeholder="Nib" class="form-control"><?php echo ''.$dados["nib"].''; ?></div>
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Nif:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <div id="text-input" name="nif" placeholder="Nif" class="form-control"><?php echo ''.$dados["nif"].''; ?></div>
                          </div>
                      </div>
                      <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Categoria:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <div id="text-input" name="categoria" placeholder="categoria" class="form-control"><?php echo ''.$dados["categoria"].''; ?></div>
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
          $pass=mysqli_fetch_array(mysqli_query($conn,"SELECT password FROM trabalhadores WHERE password='$_POST[password]' and idtrabalhador !='$editar'"));
          if(!$user && !$pass ){
            mysqli_query($conn, "UPDATE trabalhadores SET morada = '$_POST[morada]', email = '$_POST[email]', password = '$_POST[password]', username = '$_POST[username]' WHERE idtrabalhador = '$editar'");
            echo 'sucesso';
            echo '<meta http-equiv="refresh"
                content="0;url=user.php">';
          include '../../connect/deconn.php';
        }
            else{
              if($user){
                echo 'Ja tem user';
              }
              if($pass){
                echo'Ja tem pass';
              }
          }
        }
         ?>
      </div>
  </div>
<center>

<center>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <strong>Inserir dados  do </strong> Administrador
          </div>
          <div class="card-body card-block">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nome:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nome" placeholder="Nome" class="form-control">
                  </div>
              </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Apelido:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="apelido" placeholder="Apelido" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Email:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                    </div>
                </div>
                  <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Categoria do trabalhador:</label>
                      </div>
                    <div class="col-12 col-md-9">
                        <select name="categoria" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="Administrador" <?php if(isset($_POST['categoria'])){$categoria=$_POST['categoria'];}  ?>>Administrador</option>
                        </select>
                    </div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Username:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="username" placeholder="Username" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Password:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="password" placeholder="Password" class="form-control">
                          </div>
                      </div>
          <div class="card-footer">
              <button type="submit" name="insere" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Submit
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
              </button>
          </div>
        </form>
        <?php
        if(isset($_POST["insere"])){
          include '../../connect/conn.php';
          $user=mysqli_fetch_array(mysqli_query($conn,"SELECT username FROM trabalhadores WHERE username='$_POST[username]'" ));
          $email=mysqli_fetch_array(mysqli_query($conn,"SELECT email FROM trabalhadores WHERE email='$_POST[email]'" ));

          if(!$user && !$email ){
            mysqli_query($conn, "INSERT INTO trabalhadores (nome, apelido, categoria, email, password, username, tipouser ) VALUES ('$_POST[nome]', '$_POST[apelido]','$_POST[categoria]', '$_POST[email]', '$_POST[password]', '$_POST[username]', 1) ");
            echo 'sucesso';
          include '../../connect/deconn.php';
        }
            else{
              if($user){
                echo 'Ja tem user';
              }
              if($email){
                echo'Ja tem email';
              }

            }
          }




        ?>
      </div>
  </div>
<center>

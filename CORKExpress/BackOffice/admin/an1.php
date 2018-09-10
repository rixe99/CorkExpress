<center>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <strong>Inserir dados  do </strong> trabalhador
          </div>
          <div class="card-body card-block">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nome:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="nome" placeholder="Nome" class="form-control" required maxlength="15">
                  </div>
              </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Apelido:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="apelido" placeholder="Apelido" class="form-control" required maxlength="15">
                    </div>
                </div>
                <div class="row form-group">
                      <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">Morada:</label>
                      </div>
                      <div class="col-12 col-md-9">
                          <input type="text" id="text-input" name="morada" placeholder="Morada" class="form-control" required>
                      </div>
                  </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Email:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                      <div class="col col-md-3">
                          <label for="text-input" class=" form-control-label">Niss:</label>
                      </div>
                      <div class="col-12 col-md-9">
                          <input type="number" id="text-input" name="niss" placeholder="Niss" class="form-control" min="0" max="9999999999" maxlength="10" required/>
                      </div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nib:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="text-input" name="nib" placeholder="Nib" class="form-control" min="0" max="9999999999" maxlength="10" required/>
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Nif:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="number" id="text-input" name="nif" placeholder="Nif" class="form-control" min="0" max="9999999999" maxlength="10" required/>
                          </div>
                      </div>
                  <div class="row form-group">
                      <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Categoria do trabalhador:</label>
                      </div>
                    <div class="col-12 col-md-9">
                        <select name="categoria" id="select" class="form-control">
                            <option value="Finanças">Finanças</option>
                            <option value="Operador">Operador</option>
                            <option value="I.T" >I.T</option>
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
                            <input type="text" id="text-input" name="username" placeholder="Username" class="form-control" required maxlength="15">
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Password:</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="password" placeholder="Password" class="form-control" required maxlength="15">
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
        <script type="text/javascript">
            function enforce_maxlength(event) {
              var t = event.target;
              if (t.hasAttribute('maxlength')) {
              t.value = t.value.slice(0, t.getAttribute('maxlength'));
                }
              }
              document.body.addEventListener('input', enforce_maxlength);
        </script>
        <?php
          if(isset($_POST["insere"])){
            if ($_POST["categoria"] == "0"){
              echo 'Selecione a categoria';
            }
            else {
              include '../../connect/conn.php';
              $user=mysqli_fetch_array(mysqli_query($conn,"SELECT username FROM trabalhadores WHERE username='$_POST[username]'" ));
              $email=mysqli_fetch_array(mysqli_query($conn,"SELECT email FROM trabalhadores WHERE email='$_POST[email]'" ));
              $nib=mysqli_fetch_array(mysqli_query($conn,"SELECT nib FROM trabalhadores WHERE nib='$_POST[nib]'" ));
              $niss=mysqli_fetch_array(mysqli_query($conn,"SELECT niss FROM trabalhadores WHERE niss='$_POST[niss]'" ));
              $nif=mysqli_fetch_array(mysqli_query($conn,"SELECT nif FROM trabalhadores WHERE nif='$_POST[nif]'" ));
              if(!$user && !$email && !$nib && !$niss && !$nif){
                mysqli_query($conn, "INSERT INTO trabalhadores (nome, apelido, nif, nib, niss ,categoria, morada, email, password, username, tipouser ) VALUES ('$_POST[nome]', '$_POST[apelido]', '$_POST[nif]', '$_POST[nib]', '$_POST[niss]','$_POST[categoria]', '$_POST[morada]', '$_POST[email]', '$_POST[password]', '$_POST[username]', 0) ");
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
            }
           ?>
      </div>
  </div>
<center>

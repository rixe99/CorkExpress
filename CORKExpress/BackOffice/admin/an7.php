<center>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <strong>Inserir dados  do </strong> Administrador
          </div>
          <div class="card-body card-block">
            <?php
            include '../../connect/conn.php';
              @$editar = $_REQUEST["editar"];
                $dados = mysqli_fetch_array(mysqli_query($conn, "SELECT nome, apelido, categoria, email, password, username  FROM trabalhadores WHERE  idtrabalhador ='$editar'"));
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
                        <input type="text" id="text-input" name="apelido" value ="<?php echo ''.$dados["apelido"].''; ?>" placeholder="Apelido" class="form-control">
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
              <button type="submit" name="insere" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Submit
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
              </button>
          </div>
        </form>

      </div>
  </div>
<center>

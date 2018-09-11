<center>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <strong>Recibo </strong>
          </div>
          <div class="card-body card-block">
            <?php
            include '../../connect/conn.php';
              @$recibo = $_REQUEST["recibo"];
              //  $dados =mysqli_fetch_array(mysqli_query($conn, "SELECT nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo, idsalario FROM salario WHERE idsalario=$recibo"));
                $dados = mysqli_fetch_array(mysqli_query($conn, "SELECT nome, apelido, dias, nib, categoria, salario.nif, trabalhadores.nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo FROM salario RIGHT JOIN trabalhadores ON salario.nif=trabalhadores.nif WHERE idtrabalhador=$_SESSION[idtrabalhador] AND idsalario=$recibo"));
                  $messes = mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$dados[mes]'"));
                  include '../../connect/deconn.php';
              ?>
              <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nif:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <div id="text-input" name="nif" placeholder="NIF" class="form-control"><?php echo ''.$dados["nif"].''; ?></div>
                  </div>
              </div>
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
                      <label for="text-input" class=" form-control-label">Salario Liquido:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <div id="text-input" name="salariofinal" placeholder="Salario" class="form-control"><?php echo ''.round($dados["salariofinal"],2,PHP_ROUND_HALF_UP).''; ?></div>
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Mes:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <div id="text-input" name="mes" placeholder="mes" class="form-control"><?php echo ''.$messes["mes"].''; ?></div>
                  </div>
              </div>

        </form>
      </div>
  </div>
<center>

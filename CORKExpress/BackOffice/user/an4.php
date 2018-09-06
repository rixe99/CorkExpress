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
                      <div id="text-input" name="salariofinal" placeholder="Salario" class="form-control"><?php echo ''.$dados["salariofinal"].''; ?></div>
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

          <div class="card-footer">
              <button type="submit" name="update" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Update
              </button>
              <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
              </button>
          </div>
        </form>
<<<<<<< HEAD
=======

        <?php
          if(isset($_POST["insere"])){
            include '../../connect/conn.php';
            $dados = mysqli_query($conn, "SELECT nome, apelido, dias, nib, categoria, salario.nif, trabalhadores.nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo FROM salario RIGHT JOIN trabalhadores ON salario.nif=trabalhadores.nif WHERE idtrabalhador=$_SESSION[idtrabalhador] AND mes=$_POST[mes]");

            if($dados){
              while ($row=mysqli_fetch_assoc($dados)){
                $messes = mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$row[mes]'"));
                echo '<tr>';
                echo '<td style="padding: 12px 20px;">'. $row['nome']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['apelido']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['dias']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['nib']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['categoria']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['nif']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['ano']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $messes['mes']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['dias']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['salariobruto']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['salarioniss']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['salarioirs']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['salariofinal']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['turno']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['tipo']. '</td>';
              //s  echo '<td style="padding: 12px 20px;"><a href="admin.php?editar='.$row["idtrabalhador"].'&an=6"><button>Editar</button></a></td>';
                echo '</tr>';
              }
            }

          }
           ?>
>>>>>>> 31dd80cbbbccd89a71c52bd25aecf6e5d1a6d750
      </div>
  </div>
<center>

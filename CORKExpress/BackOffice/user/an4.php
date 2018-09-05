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
                      <label for="text-input" class=" form-control-label">Ano:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="ano" placeholder="Ano" class="form-control" required>
                  </div>
              </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Mes:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="mes" placeholder="Mes" class="form-control" required>
                    </div>
                </div>
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Tipo de pagamento</label>
                </div>
                    <div class="col-12 col-md-6">
                        <select name="tipo" id="select" class="form-control mv">
                            <option value="Mensal" selected>Mensal</option>
                            <option value="Férias">Férias</option>
                            <option value="Natal">Natal</option>';
                            <?php
                            include '../../connect/conn.php';
                            if(isset($_POST['tipo'])){
                              $tipo=$_POST['tipo'];
                            }
                             ?>

                        </select>
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
            $dados = mysqli_query($conn, "SELECT nome, apelido, dias, nib, categoria, salario.nif, trabalhadores.nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo FROM salario RIGHT JOIN trabalhadores ON salario.nif=trabalhadores.nif WHERE idtrabalhador=$_SESSION[idtrabalhador] AND mes=$_POST[mes]");

            if($dados){
              while ($row=mysqli_fetch_assoc($dados)){
              //  $messes = mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$row[mes]'"));
                echo '<tr>';
                echo '<td style="padding: 12px 20px;">'. $row['nome']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['apelido']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['dias']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['nib']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['categoria']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['nif']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['ano']. '</td>';
                echo '<td style="padding: 12px 20px;">'. $row['mes']. '</td>';
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
      </div>
  </div>
<center>

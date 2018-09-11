<div class="col-lg-9" style="max-width:100%;">
      <div class="table-responsive table--no-card m-b-30">
          <table class="table table-borderless table-striped table-earning">
              <thead>
                  <tr>
                      <th>NIF</th>
                      <th>Ano</th>
                      <th>Mes</th>
                      <th>Dias</th>
                      <th>Salario Bruto</th>
                      <th>SS</th>
                      <th>IRS</th>
                      <th>Salario Liquido</th>
                      <th>Truno</th>
                      <th>Tipo</th>
                      <th>ID</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    include '../../connect/conn.php';
                    $dados = mysqli_query($conn, "SELECT salario.nif, trabalhadores.nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo, idsalario FROM salario RIGHT JOIN trabalhadores ON salario.nif=trabalhadores.nif WHERE idtrabalhador=$_SESSION[idtrabalhador] ORDER BY mes, ano");
                //    $dados = mysqli_query($conn, "SELECT nif FROM trabalhadores  WHERE idtrabalhador=$_SESSION[idtrabalhador]");

                      while ($row=mysqli_fetch_assoc($dados)){
                        $messes = mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$row[mes]'"));
                        echo '<tr>';
                        echo '<td style="padding: 12px 20px;">'. $row['nif']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['ano']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $messes['mes']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['dias']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['salariobruto']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['salarioniss']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['salarioirs']. '</td>';
                        echo '<td style="padding: 12px 20px;">'.round($row['salariofinal'],2,PHP_ROUND_HALF_UP).'</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['turno']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['tipo']. '</td>';
                        echo '<td style="padding: 12px 20px;">'. $row['idsalario']. '</td>';
                        echo '<td style="padding: 12px 20px;"><a href="user.php?an=4&recibo='.$row["idsalario"].'"><button>Recibo</button></a></td>';
                        echo '</tr>';
                      }
                      include '../../connect/deconn.php';
                ?>
              </tbody>
          </table>
      </div>
  </div>
</div>
</center>

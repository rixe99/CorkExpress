<center>
  <div class="row">
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
                        <th class="text-right">SS</th>
                        <th class="text-right">IRS</th>
                        <th class="text-right">Salario Liquido</th>
                        <th class="text-right">Truno</th>
                        <th class="text-right">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                      include '../../connect/conn.php';
                      $dados = mysqli_query($conn, "SELECT salario.nif, trabalhadores.nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo FROM salario RIGHT JOIN trabalhadores ON salario.nif=trabalhadores.nif WHERE idtrabalhador=$_SESSION[idtrabalhador] ORDER BY mes, ano");
                  //    $dados = mysqli_query($conn, "SELECT nif FROM trabalhadores  WHERE idtrabalhador=$_SESSION[idtrabalhador]");

                        while ($row=mysqli_fetch_assoc($dados)){
                          echo '<tr>';
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

                  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</center>

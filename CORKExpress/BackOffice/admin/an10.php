<div class="col-lg-9" style="max-width:100%;">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Nif</th>
                    <th>Ano</th>
                    <th>Mes</th>
                    <th>Dias</th>
                    <th>Salario Bruto</th>
                    <th>DSS</th>
                    <th>IRS</th>
                    <th>Salario Liquido</th>
                    <th>Turno</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
              <?php
                  include '../../connect/conn.php';
                  @$listar = $_REQUEST["listar"];
                  $dados = mysqli_query($conn,"SELECT idsalario, nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo  FROM salario WHERE nif='$listar' ");

                    while ($row=mysqli_fetch_assoc($dados)){
                      $messes =mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$row[mes]'"));
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
                      echo '<td style="padding: 12px 20px;"><a href="admin.php?an=10&ann1=1&idsalario='.$row["idsalario"].'"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></button></a></td>';
                      echo '</tr>';
                    }
                    if(mysqli_num_rows($dados) == 0){
                      echo "NÃO EXISTEM SALARIOS";
                    }
                    include '../../connect/deconn.php';
              ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</center>
<div class="">
  <?php
  @$ann1 = $_REQUEST["ann1"];
   switch ($ann1) {
     case '1':
       include 'apagarsalario.php';
       break;
   }
   ?>
</div>

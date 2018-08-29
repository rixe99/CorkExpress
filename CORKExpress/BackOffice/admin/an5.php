<form class="form-header" action="" method="POST">
      <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
      <button class="au-btn--submit" name="pesque" type="submit">
          <i class="zmdi zmdi-search"></i>
      </button>
</form>
<br>
  <div class="row">
    <div class="col-lg-9" style="max-width:30%;">
        <div class="table-responsive table--no-card m-b-30"style="overflow-x: hidden; width:450px">
            <table class="table table-borderless table-striped table-earning">
                <thead style="display:block;">
                    <tr>
                        <th style="width:150px">Nome</th>
                        <th style="width:150px">Apelido</th>
                        <th style="width:150px">Nif</th>
                    </tr>
                </thead >
                <tbody style="display:block; overflow:scroll; height:160px;">
                  <?php
                if(isset($_POST["pesque"])){
                  include '../../connect/conn.php';
                  $first_letter = substr($_POST['search'], 0, 1);
                  $nome=mysqli_fetch_array(mysqli_query($conn,"SELECT nome FROM trabalhadores  WHERE LEFT (nome,1)='" . $first_letter . "' "));
                  $apelido=mysqli_fetch_array(mysqli_query($conn,"SELECT apelido FROM trabalhadores WHERE LEFT (apelido,1)='" . $first_letter . "' "));


                //  include '../../connect/deconn.php';
                  if($nome){

              //    include '../../connect/conn.php';
                    $first_letter = substr($_POST['search'], 0, 1);
                    $dados =mysqli_query($conn,"SELECT nome, apelido, nif  FROM trabalhadores  WHERE LEFT (nome,1)='" . $first_letter . "' AND tipouser=0 ORDER BY nome")/*)*/;

                      while ($row=mysqli_fetch_assoc($dados)){
                        echo '<tr>';
                        echo '<td>'. $row['nome']. '</td>';
                        echo '<td>'. $row['apelido']. '</td>';
                        echo '<td>'. $row['nif']. '</td>';
                        echo '</tr>';
                      }
                    }
                    else{
                      if($apelido){
                        $first_letter = substr($_POST['search'], 0, 1);
                        $dados =mysqli_query($conn,"SELECT nome, apelido, nif  FROM trabalhadores  WHERE LEFT (apelido,1)='" . $first_letter . "' AND tipouser=0 ORDER BY nome");

                          while ($row=mysqli_fetch_assoc($dados)){
                            echo '<tr>';
                            echo '<td>'. $row['nome']. '</td>';
                            echo '<td>'. $row['apelido']. '</td>';
                            echo '<td>'. $row['nif']. '</td>';
                            echo '</tr>';
                          }
                        }

                    }


                      if (empty($_POST['search'])){
                      $dados =mysqli_query($conn,"SELECT nome, apelido, nif  FROM trabalhadores where tipouser = 0");

                        while ($row=mysqli_fetch_assoc($dados)){
                          echo '<tr>';
                          echo '<td>'. $row['nome']. '</td>';
                          echo '<td>'. $row['apelido']. '</td>';
                          echo '<td>'. $row['nif']. '</td>';
                          echo '</tr>';
                        }
                      }
                    }


                 ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-lg-6">
<div class="card">
    <div class="card-header">
        Salario dos <strong>Trabalhadores</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">ID do Trabalhador:</label>
                </div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static">1</p>
                </div>
            </div>
            if ($_GET['myvariable'] == "Mensal") {
              echo '
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Tipo de pagamento</label>
                    </div>
                        <div class="col-12 col-md-6">
                            <select name="tipo" id="select" class="form-control mv">
                                <option value="Mensal" selected>Mensal</option>
                                <option value="Férias">Férias</option>
                                <option value="Natal">Natal</option>';
                                 if(isset($_POST['tipo'])){
                                   $tipo=$_POST['tipo'];
                                 }
                                 echo'
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Ano:</label>
                          </div>
                          <div class="col-12 col-md-2">
                              <input type="number" id="text-input" name="ano" placeholder="Ano" class="form-control">
                          </div>
                      </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Mes</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <select name="mes" id="select" class="form-control">
                                  <option value="1">Janeiro</option>
                                  <option value="2">Fevereiro</option>
                                  <option value="3">Março</option>
                                  <option value="4">Abril</option>
                                  <option value="5">Maio</option>
                                  <option value="6">Junho</option>
                                  <option value="7">Julho</option>
                                  <option value="8">Agosto</option>
                                  <option value="9">Setembro</option>
                                  <option value="10">Outubro</option>
                                  <option value="11">Novembro</option>
                                  <option value="12">Dezembro</option>
                                     ';
                                     if(isset($_POST['mes'])){
                                       $mes=$_POST['mes'];
                                     }  echo'
                                </select>
                            </div>
                        </div>';
                      }
                      elseif ($_GET['myvariable'] == "Férias") {
                        echo '
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="select" class=" form-control-label">Tipo de pagamento</label>
                              </div>
                          <div class="col-12 col-md-6">
                              <select name="tipo" id="select" class="form-control mv">
                                  <option value="Mensal">Mensal</option>
                                  <option value="Férias" selected>Férias</option>
                                  <option value="Natal">Natal</option>';
                                   if(isset($_POST['tipo'])){
                                     $tipo=$_POST['tipo'];
                                   }
                                   echo'
                              </select>
                          </div>
                      </div>
                      <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Ano:</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <input type="number" id="text-input" name="ano" placeholder="Ano" class="form-control">
                            </div>
                        </div>
                          <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="select" class=" form-control-label">Mes</label>
                              </div>
                              <div class="col-12 col-md-4">
                                  <select name="mes" id="select" class="form-control">
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                       ';
                                       if(isset($_POST['mes'])){
                                         $mes=$_POST['mes'];
                                       }  echo'
                                  </select>
                              </div>
                          </div>';
                        }
                        elseif ($_GET['myvariable'] == "Natal") {
                          echo '
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Tipo de pagamento</label>
                                </div>
                            <div class="col-12 col-md-6">
                                <select name="tipo" id="select" class="form-control mv">
                                    <option value="Mensal">Mensal</option>
                                    <option value="Férias">Férias</option>
                                    <option value="Natal" selected>Natal</option>';
                                     if(isset($_POST['tipo'])){
                                       $tipo=$_POST['tipo'];
                                     }
                                     echo'
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="text-input" class=" form-control-label">Ano:</label>
                              </div>
                              <div class="col-12 col-md-2">
                                  <input type="number" id="text-input" name="ano" placeholder="Ano" class="form-control">
                              </div>
                          </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Mes</label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <select name="mes" id="select" class="form-control">
                                      <option value="11">Novembro</option>
                                         ';
                                         if(isset($_POST['mes'])){
                                           $mes=$_POST['mes'];
                                         }  echo'
                                    </select>
                                </div>
                            </div>';
                          }
                      else {
                          echo '<meta http-equiv="refresh" content="0;url=admin.php?an=5&myvariable=Mensal"';
                      }
                      ?>
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Quantos dias que trabalhou:</label>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="number" id="text-input" name="dias" placeholder="Dias" class="form-control">
                          </div>
                    </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Turno</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <select name="turno" id="select" class="form-control">
                            <option value="Manhã">Manhã</option>
                            <option value="Noite">Noite</option>
                            <?php
                            if(isset($_POST['turno'])){
                              $turno=$_POST['turno'];
                            }  ?>
                        </select>
                    </div>
                </div>
                    <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Nif:</label>
                          </div>
                          <div class="col-12 col-md-6">
                              <input type="number" id="text-input" name="nif" placeholder="Nif" class="form-control">
                          </div>
                      </div>
                      <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Salario:</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="number" id="text-input" name="salario" placeholder="Salario" class="form-control">
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
        <script>
          function displayVals() {
            singleValues = "<?php echo $_GET['myvariable'] ?>";
            if (singleValues != $( ".mv" ).val()) {

              singleValues = $( ".mv" ).val();
              window.location.href = "admin.php?an=5&myvariable=" + singleValues;
            }
          }
          $( ".mv" ).change( displayVals );
          displayVals();
        </script>
        <?php
      if(isset($_POST["insere"])){
        include '../../connect/conn.php';
        $nif=mysqli_query($conn,"SELECT nif FROM trabalhadores WHERE nif=$_POST[nif]");
        $resultchecknif = mysqli_fetch_array($nif);
        if ($resultchecknif){

          if($_POST['tipo']=="Mensal"){
              $verimes=mysqli_query($conn,"SELECT nif, ano, mes, tipo FROM salario  WHERE nif=$_POST[nif] AND ano=$_POST[ano] AND mes=$_POST[mes] AND tipo='Mensal'");
              if (!$verimes) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
              }
              $resultcheck = mysqli_fetch_array($verimes);
            if (!$resultcheck){
              if($_POST['salario']<=550){
                $ss=($_POST['salario']*0.11);
                $irs=($_POST['salario']*0.08);
                $salariofinal=($_POST['salario']-$ss-$irs);
                if($_POST['turno']=="Manhã"){
                  echo "manha";
                  $bonusmanha=($salariofinal*0.01);
                  $salarioliquido=($salariofinal+$bonusmanha);
                  mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                }
                elseif ($_POST['turno']=="Noite") {
                  echo "noite";
                  $bonusnoite=($salariofinal*0.03);
                  $salarioliquido=($salariofinal+$bonusnoite);
                  mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                }
              }
              //Ordenados ate 551 a 1099
              if($_POST['salario']>=551 && $_POST['salario']<=1099){
                    $ss=($_POST['salario']*0.12);
                    if($_POST['salario']>=551 && $_POST['salario']<=999){
                        $irs=($_POST['salario']*0.09);
                        $salariofinal=($_POST['salario']-$ss-$irs);
                        if($_POST['turno']=="Manhã"){
                          echo "manha";
                          $bonusmanha=($salariofinal*0.01);
                          $salarioliquido=($salariofinal+$bonusmanha);
                          mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                        }
                        elseif ($_POST['turno']=="Noite") {
                          echo "noite";
                          $bonusnoite=($salariofinal*0.03);
                          $salarioliquido=($salariofinal+$bonusnoite);
                          mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                        }
                    }
                    elseif ($_POST['salario']>=1000 && $_POST['salario']<=1099) {
                      $irs=($_POST['salario']*0.10);
                      $salariofinal=($_POST['salario']-$ss-$irs);
                      if($_POST['turno']=="Manhã"){
                        echo "manha";
                        $bonusmanha=($salariofinal*0.01);
                        $salarioliquido=($salariofinal+$bonusmanha);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                      elseif ($_POST['turno']=="Noite") {
                        echo "noite";
                        $bonusnoite=($salariofinal*0.03);
                        $salarioliquido=($salariofinal+$bonusnoite);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                    }
              }
              //Salarios iguais ou superiores a 1100
              if($_POST['salario']>=1100){
                    $ss=($_POST['salario']*0.13);
                    if($_POST['salario']>=1100 && $_POST['salario']<=1499){
                      $irs=($_POST['salario']*0.10);
                      $salariofinal=($_POST['salario']-$ss-$irs);
                      if($_POST['turno']=="Manhã"){
                        echo "manha";
                        $bonusmanha=($salariofinal*0.01);
                        $salarioliquido=($salariofinal+$bonusmanha);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                      elseif ($_POST['turno']=="Noite") {
                        echo "noite";
                        $bonusnoite=($salariofinal*0.03);
                        $salarioliquido=($salariofinal+$bonusnoite);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                    }
                    elseif ($_POST['salario']>=1500) {
                        $irs=($_POST['salario']*0.12);
                        $salariofinal=($_POST['salario']-$ss-$irs);
                        if($_POST['turno']=="Manhã"){
                          echo "manha";
                          $bonusmanha=($salariofinal*0.01);
                          $salarioliquido=($salariofinal+$bonusmanha);
                          mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                        }
                        elseif ($_POST['turno']=="Noite") {
                          echo "noite";
                          $bonusnoite=($salariofinal*0.03);
                          $salarioliquido=($salariofinal+$bonusnoite);
                          mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salarioliquido', '$_POST[tipo]',  '$_POST[turno]') ");
                        }
                    }
              }
            }
            else {
              echo "Erro mes ja contabilizado";
            }
          }
          //FERIAS
          if($_POST['tipo']=="Férias"){
              $veriferias=mysqli_query($conn,"SELECT nif, ano, tipo FROM salario  WHERE ano=$_POST[ano] AND nif=$_POST[nif] AND tipo='Férias'");
              if (!$veriferias) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
              }
              $resultcheck1 = mysqli_fetch_array($veriferias);
              if (!$resultcheck1){
                if($_POST['salario']<=550){
                  $ss=($_POST['salario']*0.11);
                  $irs=($_POST['salario']*0.08);
                  $salariofinal=($_POST['salario']-$ss-$irs);
                  mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                }
                //Ordenados ate 551 a 1099
                if($_POST['salario']>=551 && $_POST['salario']<=1099){
                      $ss=($_POST['salario']*0.12);
                      if($_POST['salario']>=551 && $_POST['salario']<=999){
                          $irs=($_POST['salario']*0.09);
                          $salariofinal=($_POST['salario']-$ss-$irs);
                          mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                      elseif ($_POST['salario']>=1000 && $_POST['salario']<=1099) {
                        $irs=($_POST['salario']*0.10);
                        $salariofinal=($_POST['salario']-$ss-$irs);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                }
                //Salarios iguais ou superiores a 1100
                if($_POST['salario']>=1100){
                      $ss=($_POST['salario']*0.13);
                      if($_POST['salario']>=1100 && $_POST['salario']<=1499){
                        $irs=($_POST['salario']*0.10);
                        $salariofinal=($_POST['salario']-$ss-$irs);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                      elseif ($_POST['salario']>=1500) {
                          $irs=($_POST['salario']*0.12);
                          $salariofinal=($_POST['salario']-$ss-$irs);
                          mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                      }
                }
              }
            }

          else {
            echo "Ferias contabilizadas";
          }


          if($_POST['tipo']=="Natal"){
            echo "string";
            $verinatal=mysqli_query($conn,"SELECT nif, ano,tipo FROM salario WHERE ano=$_POST[ano] AND nif=$_POST[nif] AND tipo='Natal'");
            if (!$verinatal) {
              printf("Error: %s\n", mysqli_error($conn));
              exit();
            }
            $resultcheck2 = mysqli_fetch_array($verinatal);
            if (!$resultcheck2){
              if($_POST['salario']<=550){
                $ss=($_POST['salario']*0.11);
                $irs=($_POST['salario']*0.08);
                $salariofinal=($_POST['salario']-$ss-$irs);
                mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
              }
              //Ordenados ate 551 a 1099
              if($_POST['salario']>=551 && $_POST['salario']<=1099){
                    $ss=($_POST['salario']*0.12);
                    if($_POST['salario']>=551 && $_POST['salario']<=999){
                        $irs=($_POST['salario']*0.09);
                        $salariofinal=($_POST['salario']-$ss-$irs);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                    }
                    elseif ($_POST['salario']>=1000 && $_POST['salario']<=1099) {
                      $irs=($_POST['salario']*0.10);
                      $salariofinal=($_POST['salario']-$ss-$irs);
                      mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                    }
              }
              //Salarios iguais ou superiores a 1100
              if($_POST['salario']>=1100){
                    $ss=($_POST['salario']*0.13);
                    if($_POST['salario']>=1100 && $_POST['salario']<=1499){
                      $irs=($_POST['salario']*0.10);
                      $salariofinal=($_POST['salario']-$ss-$irs);
                      mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                    }
                    elseif ($_POST['salario']>=1500) {
                        $irs=($_POST['salario']*0.12);
                        $salariofinal=($_POST['salario']-$ss-$irs);
                        mysqli_query($conn, "INSERT INTO salario (nif, ano, mes, dias, salariobruto ,salarioniss, salarioirs, salariofinal, tipo, turno ) VALUES ('$_POST[nif]', '$_POST[ano]', '$_POST[mes]', '$_POST[dias]', '$_POST[salario]','$ss', '$irs', '$salariofinal', '$_POST[tipo]',  '$_POST[turno]') ");
                    }
              }
            }
          }
          else {
            echo "Natal contabilizado";
          }
        }
        else {
          echo "nif errado";
        }
      }
       ?>
    </div>
</div>

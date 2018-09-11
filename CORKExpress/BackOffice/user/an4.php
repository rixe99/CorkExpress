
<style media="screen">
  .box{
    width: 900px;
    height: 870px;
    border-radius: 10px;
    background: #f5f5f5;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 2px 0px 2px -1px rgba(0,0,0,0.67), 0px 2px 2px -1px rgba(0,0,0,0.67);
  }
  .recbcab{
    width: 300px;
    height: 150px;
    border-radius: 10px;
    background: #f5f5f5;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 2px 0px 2px -1px rgba(0,0,0,0.67), 0px 2px 2px -1px rgba(0,0,0,0.67);
    position: relative;
    top: 20px;
    left: -280px;
  }

  .recbcab2{
    width: 400px;
    height: 200px;
    border-radius: 10px;
    background: #f5f5f5;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 2px 0px 2px -1px rgba(0,0,0,0.67), 0px 2px 2px -1px rgba(0,0,0,0.67);
    position: relative;
    top: -100px;
    left: 220px;
  }

  .movbox{
    position: relative;
    left: 100px;

  }

</style>
<?php

include '../../connect/conn.php';
  @$recibo = $_REQUEST["recibo"];
  //  $dados =mysqli_fetch_array(mysqli_query($conn, "SELECT nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo, idsalario FROM salario WHERE idsalario=$recibo"));
    $dados = mysqli_fetch_array(mysqli_query($conn, "SELECT nome, apelido, dias, nib, categoria, salario.nif, trabalhadores.nif, ano, mes, dias, salariobruto, salarioniss, salarioirs, salariofinal, turno, tipo FROM salario RIGHT JOIN trabalhadores ON salario.nif=trabalhadores.nif WHERE idtrabalhador=$_SESSION[idtrabalhador] AND idsalario=$recibo"));
      $messes = mysqli_fetch_array(mysqli_query($conn,"SELECT numero_mes, mes FROM mes WHERE numero_mes = '$dados[mes]'"));

echo'
  <center>
  <div class="box">
    <div class="recbcab">
      <h1 style="position:relative;top:10px;left:-10px;"><img width="60" class="img" style="position:relative;left:10px;top:-10px;" src="images/icon/icon_cork.png"/><strong>Cork</strong>Express</h1>
      <p>Quinta da Alma nª35</p>
      <p>Cód. Postal: 3082-394 </p>
      <p>(351)555-555-555</p>
    </div>
    <div class="recbcab2">
      <br>
      <p><strong>Nome:</strong> '.$dados['nome'].'  '.$dados['apelido'].'</p>
      <p><strong>Nif:</strong> '.$dados['nif'].'   <strong>Nib:</strong> '.$dados['nib'].' </p>
      <p><strong>Dias:</strong> '.$dados['dias'].'   <strong>Data:</strong> '.$messes['mes'].' '.$dados['ano'].'</p>
      <p><strong>Tipo de Pagamento:</strong> '.$dados['tipo'].'</p>
      <p><strong>Turno:</strong> '.$dados['turno'].' </p>
      <p><strong>Categoria:</strong> '.$dados['categoria'].' </p>
    </div>
    ';
      $irs='';
      $nss='';
      $tt='';
      if($dados['salariobruto']<=550){
        $irs='8%';
      }
      elseif ($dados['salariobruto']>=551 && $dados['salariobruto']<=999 ) {
        $irs='9%';
      }
      elseif ($dados['salariobruto']>=1000 && $dados['salariobruto']<1500) {
        $irs='10%';
      }
      else{
        $irs='12%';
      }

      if($dados['salariobruto']<=550){
        $nss='11%';
      }
      elseif ($dados['salariobruto']>=551 && $dados['salariobruto']<=1099 ) {
        $nss='12%';
      }
      elseif ($dados['salariobruto']>=1100) {
        $nss='13%';
      }

      if($dados['turno']=='Noite'){
        $tt='3%';
      }
      elseif ($dados['turno']=='Amanha') {
        $tt='1%';
      }

    echo'
    <div class="movbox">
      <div class="row">
        <div class="col-lg-9" style="max-width:100%;">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th style="background-color:#e0e0e0;color:#191919;"></th>
                            <th style="background-color:#e0e0e0;color:#191919;"></th>
                            <th style="background-color:#e0e0e0;color:#191919;"></th>
                            <th style="background-color:#e0e0e0;color:#191919;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td style="padding: 12px 20px;">IRS</td>
                          <td style="padding: 12px 20px;">'.$irs.'</td>
                          <td style="padding: 12px 20px;">Desconto</td>
                          <td style="padding: 12px 20px;">'.$dados["salarioirs"].'</td>
                        </tr>
                        <tr>
                          <td style="padding: 12px 20px;">NSS</td>
                          <td style="padding: 12px 20px;">'.$nss.'</td>
                          <td style="padding: 12px 20px;">Desconto</td>
                          <td style="padding: 12px 20px;">'.$dados["salarioniss"].'</td>
                        </tr>
                        <tr>
                          <td style="padding: 12px 20px;">Turno</td>
                          <td style="padding: 12px 20px;">'.$tt.'</td>
                          <td style="padding: 12px 20px;">'.$dados['turno'].'</td>
                          <td style="padding: 12px 20px;"></td>
                        </tr>
                        <tr>
                          <td style="padding: 12px 20px;" colspan="2"></td>
                          <td style="padding: 12px 20px;">Salario Liquido</td>
                          <td style="padding: 12px 20px;">'.$dados["salariofinal"].'</td>
                        </tr>
                        <tr>
                        <td style="padding: 12px 20px;" colspan="2"></td>
                        <td style="padding: 12px 20px;">Salario Bruto</td>
                        <td style="padding: 12px 20px;">'.$dados["salariobruto"].'</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    ';include '../../connect/deconn.php';
    echo'

    <p style="position:relative; top:120px; left:-270px;">CEO: Gonçalo Ajax  CFO: Hugo Ajax</p>
  </div>
</center>
';
?>

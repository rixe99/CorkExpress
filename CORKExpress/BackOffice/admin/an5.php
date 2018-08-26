<form class="form-header" action="" method="POST">
      <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
      <button class="au-btn--submit" name="pesque" type="submit">
          <i class="zmdi zmdi-search"></i>
      </button>
</form>
<br>
  <div class="row">
    <div class="col-lg-9" style="max-width:30%;">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th class="text-right">NiB</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST["pesque"])){
                    include '../../connect/conn.php';
                    $first_letter = substr($_POST['search'], 0, 1);
                    $nome=mysqli_fetch_array(mysqli_query($conn,"SELECT nome FROM trabalhadores  WHERE LEFT (nome,1)='" . $first_letter . "' "));
                    $apelido=mysqli_fetch_array(mysqli_query($conn,"SELECT apelido FROM trabalhadores WHERE password='$_POST[search]'" ));


                  //  include '../../connect/deconn.php';
                    if($nome){

                //    include '../../connect/conn.php';
                      $first_letter = substr($_POST['search'], 0, 1);
                      $dados =mysqli_query($conn,"SELECT nome, apelido, nib  FROM trabalhadores  WHERE LEFT (nome,1)='" . $first_letter . "' ORDER BY nome")/*)*/;

                        while ($row=mysqli_fetch_assoc($dados)){
                          echo '<tr>';
                          echo '<td>'. $row['nome']. '</td>';
                          echo '<td>'. $row['apelido']. '</td>';
                          echo '<td>'. $row['nib']. '</td>';
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
<br><br>
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
            <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nib:</label>
                  </div>
                  <div class="col-12 col-md-6">
                      <input type="number" id="text-input" name="nib" placeholder="Nib" class="form-control">
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
                            <label for="text-input" class=" form-control-label">Mes:</label>
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="number" id="text-input" name="mes" placeholder="Mes" class="form-control">
                        </div>
                    </div>
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
                    <label for="select" class=" form-control-label">Tipo de pagamento</label>
                </div>
                <div class="col-12 col-md-6">
                    <select name="select" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Mensal</option>
                        <option value="2">Férias</option>
                        <option value="3">Natal</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Turno</label>
                </div>
                <div class="col-12 col-md-6">
                    <select name="select" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Manhã</option>
                        <option value="2">Noite</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>
</div>

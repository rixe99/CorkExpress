<center>
    <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <strong>Inserir dados do </strong> ANO/MES Fiscal
          </div>
          <div class="card-body card-block">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">ANO:</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="text-input" name="ano" placeholder="ANO" class="form-control" required>
                  </div>
              </div>
              <!-- <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">MES:</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="mes" placeholder="MES" class="form-control" required>
                    </div>
                </div> -->
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

  <center>
    <div class="row">
      <div class="col-lg-9" style="max-width:100%;">
          <div class="table-responsive table--no-card m-b-30">
              <table class="table table-borderless table-striped table-earning">
                  <thead>
                      <tr>
                          <th>ANO</th>
                          <th>SOMA</th>

                      </tr>
                  </thead>
                  <tbody>
                    <?php
                        include '../../connect/conn.php';
                        if(isset($_POST["insere"])){
                          $dados = mysqli_query($conn,"SELECT SUM(salariofinal) AS soma ,ano FROM salario WHERE ano=$_POST[ano]");



                            while ($row=mysqli_fetch_assoc($dados)){
                              echo '<tr>';
                              echo '<td style="padding: 12px 20px;">'. $row['ano']. '</td>';
                              echo '<td style="padding: 12px 20px;">'. $row['soma']. '</td>';
                              echo '</tr>';
                            }
                        }
                    ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</center>

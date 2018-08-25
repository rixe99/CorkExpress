<form class="form-header" action="" method="POST">
      <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
      <button class="au-btn--submit" type="submit">
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
                  <tr>
                    <td>das</td>
                    <td>das</td>
                    <td>1321323</td>
                  </tr>
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
                  <div class="col-12 col-md-9">
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
                    <label for="select" class=" form-control-label">Select</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="select" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>

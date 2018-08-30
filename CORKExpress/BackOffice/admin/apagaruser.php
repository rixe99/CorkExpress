<div class="mainbox">
  <div class="box2"></div>
  <div class="box3"></div>
  <div class="box1"></div>
  <div class="box4">
    <div class="textv3"><strong>Quere Eliminar o trabalhador <?php include '../../connect/conn.php'; $idtrabalhador = $_REQUEST["idtrabalhador"]; $dado=mysqli_fetch_array(mysqli_query($conn,"SELECT nome, apelido FROM trabalhadores WHERE idtrabalhador = '$idtrabalhador'" )); echo' '.$dado["nome"].' '.$dado["apelido"]; ?></strong></div>
    <form method="post">
      <div class="row form-group maingrup">
          <div class="col col-md-3">
              <label for="text-input" class=" form-control-label mainlab">Password:</label>
          </div>
          <div class="col-12 col-md-8">
              <input type="password" id="text-input" name="password" placeholder="Password" class="form-control">
          </div>
      </div>
      <br><br>
      <div class="card-footer">
          <button type="submit" name="sim" class="btn btn-primary btn-sm">
              <i class="fa fa-dot-circle-o"></i> Sim
          </button>
          <button type="submit" class="btn btn-danger btn-sm" name="nao">
              <i class="fa fa-ban"></i> Não
          </button>
      </div>
    </form>
  </div>
</div>

<?php
    if (isset($_POST["sim"])){
      if($_POST["password"] == "abc.123")
        include '../../connect/conn.php';
        $idtrabalhador = $_REQUEST["idtrabalhador"];
        mysqli_query($conn, "DELETE FROM trabalhadores WHERE idtrabalhador = '$idtrabalhador'");
        echo '<meta http-equiv="refresh" content="0;url=admin.php?an=8">';
    }
 ?>

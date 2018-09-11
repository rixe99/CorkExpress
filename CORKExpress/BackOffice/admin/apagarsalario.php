<div class="mainbox">
  <div class="box1"></div>
  <div class="box2"></div>
  <div class="box3"></div>
  <div class="box4">
    <div class="textv3"><strong>Quere apagar o salario <?php include '../../connect/conn.php'; $idsalario = $_REQUEST["idsalario"]; $dado=mysqli_fetch_array(mysqli_query($conn,"SELECT nif FROM salario WHERE idsalario = '$idsalario'" )); echo'<br>   '.$dado["nif"];   include '../../connect/deconn.php'; ?> </strong></div>
    <form method="post">
      <div class="row form-group maingrup">
          <div class="col col-md-3">
              <label for="text-input" class=" form-control-label mainlab">Password:</label>
          </div>
          <div class="col-12 col-md-8">
              <input type="password" id="text-input" name="password" placeholder="Password" class="form-control mxx" required>
          </div>
      </div>

      <div class="card-footer mainbut">
          <button type="submit" name="sim" class="btn btn-primary btn-sm sim">
              <i class="fa fa-dot-circle-o"></i> Sim
          </button>
          <button type="submit" class="btn btn-danger btn-sm" name="nao">
              <i class="fa fa-ban"></i> Não
          </button>
      </div>
    </form>
    <?php
        include '../../connect/conn.php';
        if (isset($_POST["sim"])){
          if($_POST["password"] == "abc.123"){
          //  $niftrabalhador = $_REQUEST["niftrabalhador"];
            mysqli_query($conn, "DELETE FROM salario WHERE idsalario = '$idsalario'");
            echo '<meta http-equiv="refresh" content="0;url=admin.php?an=10">';
          }elseif (($_POST["password"] != "abc.123") && ($_POST["password"] != "")) {
            echo '<strong class="erro">X</strong>';
          }
        }
        if(isset($_POST["nao"])){
          echo '<meta http-equiv="refresh" content="0;url=admin.php?an=8">';
        }
        include '../../connect/deconn.php';
     ?>
  </div>
  <div class="box5"></div>
</div>

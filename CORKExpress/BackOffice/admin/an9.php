<form class="form-header" action="" method="POST">
      <input class="au-input au-input--xl" type="text" name="search" placeholder="Procura por nome &amp; apelido do trabalhador" />
      <button class="au-btn--submit" name="pesque" type="submit">
          <i class="zmdi zmdi-search"></i>
      </button>
</form>
<small>Se quiser aparecer todos os trabalhadores clique só no botão e deixe barra em branco</small>
<br>
<center>
  <div class="row">
    <div class="col-lg-9" style="max-width:100%;">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>NiF</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST["pesque"])){
                    include '../../connect/conn.php';
                    $first_letter = substr($_POST['search'], 0, 1);
                    if (empty($_POST['search'])){
                    $dados =mysqli_query($conn,"SELECT idtrabalhador, nome, apelido, nif  FROM trabalhadores where tipouser = 0 ORDER BY nome");

                      while ($row=mysqli_fetch_assoc($dados)){
                        echo '<tr>';
                        echo '<td>'. $row['nome']. '</td>';
                        echo '<td>'. $row['apelido']. '</td>';
                        echo '<td>'. $row['nif']. '</td>';
                        echo '<td style="padding: 12px 20px;"><a href="admin.php?listar='.$row["nif"].'&an=10"><button>Listar</button></a></td>';
                        echo '</tr>';
                      }
                    }else {
                      $first_letter = substr($_POST['search'], 0, 1);
                      $dados =mysqli_query($conn,"SELECT idtrabalhador, nome, apelido, nif FROM trabalhadores  WHERE LEFT (nome,1)='" . $first_letter . "' OR LEFT (apelido,1)='" . $first_letter . "' AND tipouser=0 ORDER BY nome");

                        while ($row=mysqli_fetch_assoc($dados)){
                          echo '<tr>';
                          echo '<td>'. $row['nome']. '</td>';
                          echo '<td>'. $row['apelido']. '</td>';
                          echo '<td>'. $row['nif']. '</td>';
                          echo '<td style="padding: 12px 20px;"><a href="admin.php?listar='.$row["nif"].'&an=10"><button>Listar</button></a></td>';
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
</center>

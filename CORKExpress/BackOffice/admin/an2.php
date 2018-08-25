  <center>
    <div class="row">
      <div class="col-lg-9" style="max-width:100%;">
          <div class="table-responsive table--no-card m-b-30">
              <table class="table table-borderless table-striped table-earning">
                  <thead>
                      <tr>
                          <th>Nome</th>
                          <th>Apelido</th>
                          <th>Morada</th>
                          <th>Email</th>
                          <th>Categoria</th>
                          <th class="text-right">NiB</th>
                          <th class="text-right">Niss</th>
                          <th class="text-right">Username</th>
                          <th class="text-right">Password</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                        include '../../connect/conn.php';
                        $dados = mysqli_query($conn,"SELECT nome, apelido, nib, niss ,categoria, morada, email, password, username  FROM trabalhadores WHERE tipouser=0 ORDER BY nome ");

                          while ($row=mysqli_fetch_assoc($dados)){
                            echo '<tr>';
                            echo '<td>'. $row['nome']. '</td>';
                            echo '<td>'. $row['apelido']. '</td>';
                            echo '<td>'. $row['morada']. '</td>';
                            echo '<td>'. $row['email']. '</td>';
                            echo '<td>'. $row['categoria']. '</td>';
                            echo '<td>'. $row['nib']. '</td>';
                            echo '<td>'. $row['niss']. '</td>';
                            echo '<td>'. $row['username']. '</td>';
                            echo '<td>'. $row['password']. '</td>';
                            echo '</tr>';
                          }

                    ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</center>

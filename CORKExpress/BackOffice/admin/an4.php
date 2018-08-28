<center>
  <div class="row">
    <div class="col-lg-9" style="max-width:100%;">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Email</th>
                        <th class="text-right">Categoria</th>
                        <th class="text-right">Username</th>
                        <th class="text-right">Password</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    include '../../connect/conn.php';
                    $dados =mysqli_query($conn,"SELECT idtrabalhador, nome, apelido, categoria, email, password, username  FROM trabalhadores WHERE tipouser=1 ORDER BY nome")/*)*/;

                      while ($row=mysqli_fetch_assoc($dados)){
                        echo '<tr>';
                        echo '<td>'. $row['nome']. '</td>';
                        echo '<td>'. $row['apelido']. '</td>';
                        echo '<td>'. $row['email']. '</td>';
                        echo '<td>'. $row['categoria']. '</td>';
                        echo '<td>'. $row['username']. '</td>';
                        echo '<td>'. $row['password']. '</td>';
                        echo '<td><a href="admin.php?editar='.$row["idtrabalhador"].'&an=7"><button>Editar</button></a></td>';
                        echo '</tr>';
                      }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</center>

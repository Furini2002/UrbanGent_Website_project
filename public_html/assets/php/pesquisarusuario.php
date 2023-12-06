<html>
<?php 
if (isset($_POST['pesquisa'])) { 
  $pesquisa = $_POST['pesquisa'];
  $sql = "SELECT * from usuario WHERE (nome LIKE  '%$pesquisa%')";
  $resultado = mysqli_query($conn, $sql);
?>
    
    <div class="container">

<div class="card" style="width: 81rem;">

  <div class="card-body">
    <h3 class="card-title">Listagem de Usuários
    <a href="clienteCadastrar.php" target="_blank" class="btn btn-primary"> <i class="bi bi-plus-lg"></i></a></h3>
  </div>
</div>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">email</th>
      </tr>
  </thead>
  <tbody>

    <?php while ($linha = mysqli_fetch_array($resultado)): ?>
    <tr>
        <td><?= $linha ['id'] ?></td>
        <td><?= $linha ['nome'] ?></td>
        <td><?= $linha ['email'] ?></td>
        <td>

          <a href="usuarioListar.php?id=<?=$linha['id'] ?>"
                  class="btn btn-danger"
                  onclick="return confirm('Confirma exclusão de <?= $linha['nome'] ?>? ')">
              <i class="fa-solid fa-trash-can"></i> <i class="bi bi-trash3-fill"></i>
      </a>
     </tr>
    </tr>
    
    <?php endwhile; ?>

  </tbody>
</table>

</div>
   
<?php } ?>
   </body>
   </html>
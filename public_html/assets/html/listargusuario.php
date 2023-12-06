<?php
session_start();

if (!isset($_SESSION['email'])){
     header ('location: ../php/sair.php');
 }
//1 - Conectar no BD host, usuario, senha, nome do DB
//$conexao = mysqli_connect("localhost", "root", "", "test");
require('../php/conexao.php');

//Exclusão - comando
if (isset($_GET['id'])) {//verifica se foi clicado o botão excluir
  $sql = "delete from grupousuario where id = " . $_GET['id'];
  mysqli_query($conn, $sql);
  $mensagem = "Exclusão realizada com sucesso.";
  echo "<script> alert ('$mensagem')</script>";
}

//2 - Preparar a SQL
//Seleciona a tabela usuário 
$sql = "select * from grupousuario";

//3 - Executa a SQL
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Grupo de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a71b6567c4.js" crossorigin="anonymous"></script>

</head>

<?php
include '../../header.php';
?> 

<body>

  <div class="container">
    <br><br>
    <div class="card">
      <div class="card-body">
      <div class="row">
          <h2 class="card-title col">Grupo de usuários</h2>
          <a href="listarusuario.php" class="card-title btn btn-primary col col-1" style="margin-right: 12px">
            <i class="fa-solid fa-arrow-left" style="color: #000000; align-items: center; justify-content: center"></i>
          </a>
          <a href="cadastrargusuario.php" class="card-title btn btn-primary col-1" style="margin-right: 12px">
            <i class="fa-solid fa-plus" style="color: #000000;"></i>          
          </a>
        </div>
      </div>
    </div>
    <div>
      <br><br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="col">ID</th>
            <th class="col">Nome</th>            
            <th class="col">Ações</th>            
          </tr>
        </thead>
        <tbody>
            
        

        <?php while ($linha = mysqli_fetch_array($resultado)): ?>
        <tr>
          <td><?= $linha['id'] ?></td>
          <td><?= $linha['nome'] ?></td>          
          <td>
            <a href="usuarioAlterar.php?id=<?= $linha['id'] ?>" class="btn btn-warning">Alterar
              <i class="fa-solid fa-open-to-square"></i>          
          </a>

          <a href="listargusuario.php?id=<?= $linha['id'] ?>" class="btn btn-danger"
              onclick="return confirm('Confirma exclusão?')"> Excluir
          <i class="fa-solid fa-trash-can"></i>        
          </a>
        </td>
        </tr>
        <?php endwhile; ?>  

        </tbody>
      </table>
    </div>
  </div>
  </div>

</body>

</html>
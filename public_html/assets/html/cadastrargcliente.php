
<?php
session_start();
if (!isset($_SESSION['email'])){
     header ('location: ../php/sair.php');
 }
 
if (isset($_POST['cadastrar'])) {
    # code...

    //1 - Conectar no BD host, usuario, senha, nome do DB
    //$conexao = mysqli_connect("localhost", "root", "", "test");
    require('../php/conexao.php');


    //2 - Preparar a SQL

    $nome = $_POST['nome'];    
    
    $sql = "insert into grupocliente (nome)
            values ('$nome')";


    //3 - Executar no BD a SQL
    mysqli_query($conn, $sql);

    //4 - Mostrar uma mensagem de sucesso agradável ao usuário
    echo ("<div class='alert alert-success fixed-bottom mb-0' role='alert'>
            Cadastro realizado com sucesso !!!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<?php include '../../header.php'; ?> 

<body>
    <div class="container">    
        <br><br>
        <div class="card">
        <div class="card-body">
            <div class="row">
            <h2 class="card-title col">Cadastrar grupo de clientes</h2>
            <a href="listargcliente.php" class="card-title btn btn-primary col col-1" style="margin-right: 12px">
                <i class="fa-solid fa-arrow-left" style="color: #000000;"></i>
            </a>
        </div>
        </div>        
        </div>        
        <br><br>    

        <div class="card">  
            <div class="card-body">      

                <form method="post">
                    
                    <div class="row">
                        <div class="col">
                            <label for="nome" class="form-label">Nome</label>
                            <input name="nome" type="text" class="form-control" id="nome" placeholder="Insira aqui o nome do grupo">
                        </div>                        
                    </div>  
                    
                    <div style="margin-top: 12px">
                        <button name="cadastrar" type="submit" class="btn btn-success">Salvar</button>
                        <button name="cadastrar" type="reset" class="btn btn-danger">Cancelar</button>
                    </div>

                    
                </form>
            </div>   
        </div>
</body>


</html>
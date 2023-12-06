<?php
session_start();
 
if (isset($_POST['cadastrar'])) {
    # code...

    //1 - Conectar no BD host, usuario, senha, nome do DB
    //$conexao = mysqli_connect("localhost", "root", "", "test");
    require('../php/conexao.php');


    //2 - Preparar a SQL

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuario (nome, email, senha)
            values ('$nome', '$email', '$senha')";

    //3 - Executar no BD a SQL
    mysqli_query($conn, $sql);
    

    
    

    //4 - Mostrar uma mensagem de sucesso agradável ao usuário
    /*echo ("<div class='alert alert-success fixed-bottom mb-0' role='alert' >
            Cadastro realizado com sucesso !!!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");*/
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/style.css">
    <script src="assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a71b6567c4.js" crossorigin="anonymous"></script>
    
    <title>Tela login</title>
</head>

<?php include '../../header.php'; ?> 

<body> 
    <main id="container"> 
        <form method="POST" id="login-form" class="light-mode" action="../php/cadastrar_logar.php">
            <div id="form-header">
                <h1>Cadastro</h1>
                <img id="mode-icon" src="../img/moon.png" alt="Lua - dark mode" width="20px">

            </div>
            <div id="social-media">
                <a href="#">
                    <img src="../img/facebook.png" alt="Facebook logo">
                </a>

                <a href="#">
                    <img src="../img/google.png" alt="Google logo">
                </a>

                <a href="#">
                    <img src="../img/github.png" alt="Github logo">
                </a>
            </div>

            <div id="inputs">
                <div class="inputbox">
                    <label for="name">
                        Nome
                        <div class="input-field">
                            <a href="#">
                                <img src="../img/user.png" alt="Ícone usuário">
                            </a>
                            <input type="text" id="name" name="name">
                        </div>
                    </label>
                </div>

                <div class="inputbox">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <a href="#">
                                <img src="../img/email.png" alt="ícone email">
                            </a>
                            <input type="text" id="email" name="email">
                        </div>
                    </label>
                </div>

                <div class="inputbox">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <a href="#">
                                <img src="../img/senha.png" alt="ícone senha">
                            </a>
                            <input type="password" id="senha" name="senha">
                        </div>
                    </label>

                    <div id="forgot-password">
                        <a href="login.php">
                            Já possui login?
                        </a>
                    </div>

                </div>
            </div>

            <button type="submit" id="login-button" name="cadastrar">
                Cadastrar
            </button>
        </form>
    </main>

</body>

</html>
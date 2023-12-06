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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .fixed-bottom {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            /* Valor padrão do Bootstrap para alertas */
        }
    </style>


    <title>Tela login</title>
</head>

<?php include '../../header.php'; ?>

<body>
    <div class="fixed-bottom">
        <?php
            if (isset($_GET['erro'])) {
            $erro = urldecode($_GET['erro']);
            echo '<div class="alert alert-danger alert-dismissible fade show">';
            echo $erro;
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>
    </div>



    <main id="container">
        <form method="POST" id="login-form" class="light-mode" action="../php/logar.php">
            <div id="form-header">
                <h1>Login</h1>
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
                        <a href="cadastrarusuario.php">
                            Ainda não tem login? Bora fazer um ...
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
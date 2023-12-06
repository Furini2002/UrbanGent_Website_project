<?phpsession_start();?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a71b6567c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <title>Tela login</title>
</head>
<header>
    <div class="header-container">
        <div class="logo">
            <a href="../../index.php">
                <img src="../../assets/img/logo.png" style="width:40px" href="../../index.php">
            </a>
        </div>
        <div class="menu">
            <nav>
                <a href="../../index.php" class="main-link">home</a>
                <a href="../../assets/html/listarproduto.php" class="main-link">produtos</a>
                <?php
                if (isset($_SESSION['email'])) { ?>
                <a href="../../assets/html/listarcliente.php" class="main-link">clientes</a>
                <a href="../../assets/html/listarusuario.php" class="main-link">usuários</a>   
                <?php } ?>
            </nav>
        </div>

        <?php
        if (isset($_SESSION['email'])) { ?>

            <div class="text-header">
                <p>Bem vindo,
                    <?php echo $_SESSION['nome']; ?>

                </p>
            </div>

            <div class="dropdown">
                <span class="material-symbols-outlined">expand_more</span>
                <div class="dropdown-content">
                    <a href="../../assets/html/meuPerfil.php">Meu perfil</a>
                    <a href="../../assets/php/encerrar-sessao.php">Sair</a>                    
                </div>

            </div>

            </svg>

        <?php } ?>

        <?php
        if (!isset($_SESSION['email'])) { ?>

            <div>
                <button class="sociais" href="../../assets/html/cadastrarusuario.php"><a href="../../assets/html/cadastrarusuario.php">cadastre-se</a></button>
                <button class="sociais-invert" href="../../assets/html/login.php"><a href="../../assets/html/login.php">login</a></button>
            </div>

        <?php } ?>


    </div>
</header>

</html>
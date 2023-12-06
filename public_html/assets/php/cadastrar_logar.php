<?php
session_start();


require('../php/conexao.php');


    //2 - Preparar a SQL

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuario (nome, email, senha)
            values ('$nome', '$email', '$senha')";

    //3 - Executar no BD a SQL
    mysqli_query($conn, $sql);
    
    // 4 - logar

    require_once('conexao.php');
    $email = $_POST["email"];
    $senha = $_POST["senha"];
 
    $sql = "SELECT * FROM usuario WHERE (email='$email' AND senha='$senha')";
    $resultado = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($resultado)>0){
        $_SESSION['email'] = $email;   
        $sql = "select nome from usuario where (email='$email')";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        $_SESSION['nome'] = $row['nome'];
    
        header('Location: ../../index.php');
        die();
    }else{
        session_destroy();
        header('Location: ../html/login.php');
        die();
    }

    //4 - Mostrar uma mensagem de sucesso agradável ao usuário
    /*echo ("<div class='alert alert-success fixed-bottom mb-0' role='alert' >
            Cadastro realizado com sucesso !!!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");*/
        
        ?>
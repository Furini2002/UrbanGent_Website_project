<?php 
session_start();
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
?>
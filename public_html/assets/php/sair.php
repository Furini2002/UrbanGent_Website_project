<?php
session_start();

if (!isset($_SESSION['email'])) {
    $erro = 'Você não está logado. Faça login para continuar.';
    header('location: https://urbangent.000webhostapp.com/assets/html/login.php?erro=' . urlencode($erro));
    exit();
}
?>

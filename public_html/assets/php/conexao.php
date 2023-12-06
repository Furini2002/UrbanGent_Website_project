<?php

//Conexão para acessar o banco de dados no webhost
$servername = "localhost";
$username = "id21382077_ifpr";
$password = "IFpr@2023*";
$database = "id21382077_bd";


//Conexao para rodar no xamp local, só alterar o banco de dados 
/*$servername = "localhost";
$username = "root";
$password = "";
$database = "id21382077_bd";*/

// Cria a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

/*Verifica se deu certo a conexão
if ($conn->connect_error) {
    echo "erro";
  //die("Conexão Falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";*/
?>
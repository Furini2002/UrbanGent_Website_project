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
    $cpfcnpj = $_POST['cpfcnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $status = $_POST['status'];

    $sql = "insert into cliente (nome, cpfcnpj, email, telefone, cep, endereco, numero, cidade, estado, status)
            values ('$nome', '$cpfcnpj', '$email', '$telefone', '$cep', '$endereco', '$numero', '$cidade', '$estado', '$status')";


    //3 - Executar no BD a SQL
    mysqli_query($conn, $sql);

    //4 - Mostrar uma mensagem de sucesso agradável ao usuário
    //echo "Registro inserido com sucesso!!!!!";
    echo ("<div class='alert alert-success fixed-bottom mb-0' role='alert'>
            Cadastro realizado com sucesso !!!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
}
?>

<?php
$pagina_atual = 'home';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"crossorigin="anonymous"></script>
    <script src="assets\js\script.js"></script>
</head>

<?php include '../../header.php';
?>

<body>
    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h2 class="card-title col">Cadastrar Cliente</h2>
                    <a href="../../assets/html/listarcliente.php" class="card-title btn btn-primary col col-1" style="margin-right: 12px">
                        <i class="fa-solid fa-arrow-left"
                            style="color: #000000; align-items: center; justify-content: center"></i>
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
                            <input name="nome" type="text" class="form-control" id="nome" placeholder="Insira seu Nome">
                        </div>

                        <div class="col">
                            <label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
                            <input name="cpfcnpj" type="text" class="form-control" id="cpfcnpj" placeholder="xxx.xxx.xxx-xx" oninput="formatarcpfcnpj(this)">
                        </div>

                        <div class="col-2">
                            <label for="status" class="form-label">Status</label>
                            <div>
                                <label style="margin-right: 10px">
                                    <input name="status" type="radio" id="status" value="Ativo" checked> Ativo
                                </label>
                                <label>
                                    <input name="status" type="radio" id="status" value="Inativo"> Inativo
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="email" class="form-label">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder="Insira seu e-mail principal">
                        </div>

                        <div class="col-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input name="telefone" type="text" class="form-control" id="telefone" placeholder="(xx) xxxx-xxxx" oninput="formatartelefone(this)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input name="cep" type="text" class="form-control" id="cep" placeholder="xxxxx-xxx" oninput="formatarcep(this)">
                        </div>

                        <div class="col">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input name="endereco" type="text" class="form-control" id="endereco"
                                placeholder="Insira aqui o nome da sua rua, logradouro, etc.">
                        </div>

                        <div class="col-2">
                            <label for="numero" class="form-label">Número</label>
                            <input name="numero" type="text" class="form-control" id="numero">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input name="cidade" type="text" class="form-control" id="cidade"
                                placeholder="Insira a cidade onde mora">
                        </div>

                        <div class="col-2">
                            <label lass="form-label">Estado</label>
                            <div>
                                <select id="estado" name="estado" class="form-select">
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 12px">
                        <button name="cadastrar" type="submit" class="btn btn-success">Salvar</button>
                        <button name="cadastrar" type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
            </div>

            </form>
        </div>
    </div>
</body>


</html>
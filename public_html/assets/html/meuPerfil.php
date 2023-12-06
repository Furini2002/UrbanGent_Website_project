<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<?php 
include '../../header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Meu Perfil</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 text-center">
                           <img src="..\img\fotoPerfilPadrão.png" alt="Foto de Perfil" class="img-thumbnail" style="width: 200px; height: 200px;">                                                    
                        </div>

                        <div class="mb-3">
                            <label for="nome" class="form-label" >Nome:</label>
                            <input type="text" class="form-control text-muted bg-light" id="nome" value="<?php echo $_SESSION['nome']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label" >Email:</label>
                            <input type="email" class="form-control text-muted bg-light" id="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control text-muted bg-light" id="senha" value="********" readonly>
                        </div>

                        <!-- Botão de Atualizar -->
                        <button type="button" class="btn btn-primary">Atualizar Perfil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Adicionando Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>

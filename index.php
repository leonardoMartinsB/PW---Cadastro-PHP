<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('../../img/fundo.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: flex-start; /* Muda de center para flex-start para alinhar no início da área disponível */
            justify-content: center; /* Centraliza horizontalmente */
            padding-top: 70px; /* Ajuste conforme a altura da navbar */
            overflow: hidden; /* Previne o scroll vertical */
        }
        .navbar {
            background-color: #343a40; /* Cor mais escura para a navbar */
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .navbar-brand {
            color: #ffffff;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px; /* Limita a largura máxima do formulário */
            margin-top: 20px; /* Espaço adicional abaixo do navbar */
        }
        .form-control, .btn {
            margin-bottom: 1rem;
        }
        .btn-container {
            display: flex;
            justify-content: center; /* Centraliza os botões */
            gap: 10px; /* Espaçamento entre os botões */
        }
    </style>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Empresa XPTO</a>
        </div>
    </nav>
    <div class="container">
        <form action="dados.php" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="id" name="id" placeholder="ID" required>
                <label for="id">ID:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" maxlength="50" required>
                <label for="nome">Nome:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" maxlength="50" required>
                <label for="endereco">Endereço:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade" required>
                <label for="idade">Idade:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="Data de Nascimento" required>
                <label for="datanasc">Data de Nascimento:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="foto" name="foto" required>
                <label for="foto">Foto:</label>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
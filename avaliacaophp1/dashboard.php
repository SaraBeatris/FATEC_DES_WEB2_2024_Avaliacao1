<?php
session_start();

$validUsers = ['tecnico', 'coordenacao'];
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE || $_SESSION['username'] !== 'tecnico') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Técnica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #792e10b2, #7bf5fe);
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn-custom-blue {
            background-color: #007bff;
            color: #fff; 
            border-color: #007bff; 
        }
        .btn-custom-blue:hover {
            background-color: #0056b3; 
            border-color: #004080; 
        }
        .btn-custom-red {
            background-color: #dc3545; 
            color: #fff; 
            border-color: #dc3545; 
        }
        .btn-custom-red:hover {
            background-color: #c82333; 
            border-color: #bd2130; 
        }
    </style>
</head>
<body>
    <header>
        <h1>Solicitações tecnicas</h1>
    </header>
    <div class="container">
        <div class="card">
            <h2>Visualização de Solicitações</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <a href="visualizar_solicitacoes.php" class="btn btn-custom-blue btn-lg w-100">Visualizar Solicitações GE</a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="visualizar_solicitacoes.php" class="btn btn-custom-red btn-lg w-100">Visualizar Solicitações DSM</a>
                </div>
            </div>
            <a href="logout.php" class="btn btn-info btn-custom">Sair</a>
      
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


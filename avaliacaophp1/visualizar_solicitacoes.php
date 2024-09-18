<?php
session_start();


$validUsers = ['tecnico', 'coordenacao'];
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE || !in_array($_SESSION['username'], $validUsers)) {

    header("Location: login.php");
    exit();
}


function lerRegistros($filename) {
    if (file_exists($filename)) {
        return file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } else {
        return [];
    }
}


$registrosGE = lerRegistros('ge.txt');
$registrosDSM = lerRegistros('dsm.txt');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Solicitações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Visualizar Solicitações</h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </header>
    <div class="container">
        <h2>Solicitações GE</h2>
        <div class="card">
            <ul class="list-group">
                <?php foreach ($registrosGE as $registro): ?>
                    <li class="list-group-item"><?php echo htmlspecialchars($registro); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <h2>Solicitações DSM</h2>
        <div class="card">
            <ul class="list-group">
                <?php foreach ($registrosDSM as $registro): ?>
                    <li class="list-group-item"><?php echo htmlspecialchars($registro); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

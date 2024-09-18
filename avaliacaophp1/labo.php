<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratório</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #792e10b2, #7bf5fe);
        }
        .container {
            margin-top: 30px;
        }
        .card {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn-custom {
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="card-title">Bem-vindo à Página do Laboratório</h1>

            <form action="solicitacao.php" method="post">
                <div class="form-group">
                    <label for="laboratorio">Laboratório:</label>
                    <select id="laboratorio" name="laboratorio" class="form-control" required>
                        <option value="Laboratório 1">Laboratório 1</option>
                        <option value="Laboratório 2">Laboratório 2</option>
                        <option value="Laboratório 3">Laboratório 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="prazo">Prazo Limite:</label>
                    <input type="date" id="prazo" name="prazo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="curso">Curso Atendido:</label>
                    <select id="curso" name="curso" class="form-control" required>
                        <option value="DSM">DSM</option>
                        <option value="GE">GE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="registro">Registro da Solicitação:</label>
                    <textarea id="registro" name="registro" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-custom">Enviar Solicitação</button>
                <a href="logout.php" class="btn btn-danger btn-custom">Sair</a>
                <a href="dashboard.php" class="btn btn-info btn-custom">Visualização das Solicitações</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



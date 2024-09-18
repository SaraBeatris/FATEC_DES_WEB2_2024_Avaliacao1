<?php
session_start();


$validCredentials = [
    'coordenacao' => 'coordenacao',
    'tecnico' => 'tecnico'
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if (isset($validCredentials[$username]) && $validCredentials[$username] === $password) {
        
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $username;

        
        if ($username === 'tecnico') {
            header("Location: dashboard.php");
        } else {
            header("Location: labo.php");
        }
        exit();
    } else {
        
        $_SESSION['loggedin'] = FALSE;
        $_SESSION['error_message'] = 'Nome de usuário ou senha incorretos.';
        header("Location: login.php");
        exit();
    }
}


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {

    header("Location: login.php");
    exit();
}


if (basename($_SERVER["SCRIPT_NAME"]) === 'dashboard.php' && $_SESSION['username'] !== 'tecnico') {
    header("Location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['laboratorio'])) {
    
    if (isset($_POST['laboratorio']) && isset($_POST['prazo']) && isset($_POST['registro']) && isset($_POST['curso'])) {
        
        $laboratorio = htmlspecialchars($_POST['laboratorio']);
        $prazo = htmlspecialchars($_POST['prazo']);
        $registro = htmlspecialchars($_POST['registro']);
        $curso = htmlspecialchars($_POST['curso']);

        
        if ($curso == "GE") {
            $filename = "ge.txt";
        } elseif ($curso == "DSM") {
            $filename = "dsm.txt";
        } else {
            die("Curso inválido!");
        }

        
        $data = $laboratorio . " | " . $prazo . " | " . $registro . PHP_EOL;

        
        if (file_put_contents($filename, $data, FILE_APPEND)) {
            echo "Solicitação cadastrada com sucesso!";
        } else {
            echo "Erro ao cadastrar a solicitação!";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>


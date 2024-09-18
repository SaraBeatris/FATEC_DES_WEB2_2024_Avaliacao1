<?php
session_start();


$validUsers = ['tecnico', 'coordenacao'];
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE || !in_array($_SESSION['username'], $validUsers)) {

    header("Location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['laboratorio']) && isset($_POST['prazo']) && isset($_POST['curso']) && isset($_POST['registro'])) {
       
        $laboratorio = htmlspecialchars($_POST['laboratorio']);
        $prazo = htmlspecialchars($_POST['prazo']);
        $curso = htmlspecialchars($_POST['curso']);
        $registro = htmlspecialchars($_POST['registro']);

       
        $filename = ($curso == "GE") ? "ge.txt" : "dsm.txt";

     
        $data = "Laboratório: $laboratorio | Prazo: $prazo | Registro: $registro" . PHP_EOL;

        if (file_put_contents($filename, $data, FILE_APPEND)) {
            $message = "Solicitação cadastrada com sucesso!";
        } else {
            $message = "Erro ao cadastrar a solicitação!";
        }
    } else {
        $message = "Preencha todos os campos!";
    }


    header("Location: laboratorio.php?message=" . urlencode($message));
    exit();
}
?>

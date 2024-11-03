<?php
session_start(); // Inicia a sessão

// Verifica se o array de URLs encurtadas já está salvo na sessão, caso contrário, inicializa-o.
if (!isset($_SESSION['shortUrls'])) {
    $_SESSION['shortUrls'] = [];
}

// Função para gerar um código aleatório de 6 caracteres
function generateCode($length = 6) {
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
}

// Verifica se foi enviada uma URL para encurtar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['url'])) {
    $originalUrl = $_POST['url'];
    $code = generateCode();

    // Armazena o código e a URL original no array dentro da sessão
    $_SESSION['shortUrls'][$code] = $originalUrl;

    echo "Link encurtado: <a href='?c=$code'>http://localhost:8000/?c=$code</a>";
}

// Verifica se o link curto foi acessado e redireciona
if (isset($_GET['c'])) {
    $code = $_GET['c'];
    if (isset($_SESSION['shortUrls'][$code])) {
        header("Location: " . $_SESSION['shortUrls'][$code]);
        exit();
    } else {
        echo "Link não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Encurtador de Links</title>
</head>
<body>
    <h1>Encurtador de Links</h1>
    <form method="POST" action="">
        <label for="url">URL para encurtar:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">Encurtar

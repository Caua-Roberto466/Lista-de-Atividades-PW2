<?php
$num1 = $_POST['num1'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos quadrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>O número é:</h3>
        <p class="resultado">
            <?= $num % 2 == 0 ? "Par" : "Impar"?>
        </p>
        <a class="back" href="ex10.html">← voltar</a>
    </div>
</body>
</html>
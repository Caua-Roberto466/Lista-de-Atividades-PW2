<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$maior = max($num1, $num2, $num3);
$menor = min($num1, $num2, $num3);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e menor número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Maior e menor número:</h3>
        <p class="resultado">
            <?= "O maior é $maior e o menor é $menor"?>
        </p>
        <a class="back" href="ex8.html">← voltar</a>
    </div>
</body>
</html>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$qdrd1 = pow($num1, 2);
$qdrd2 = pow($num2, 2);
$qdrd3 = pow($num3, 2);

$soma = $qdrd1 + $qdrd2 + $qdrd3;
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
        <h3>A soma dos quadrados é:</h3>
        <p class="resultado">
            <?= number_format($soma, 1, ',', '.') ?>
        </p>
        <a class="back" href="ex5.html">← voltar</a>
    </div>
</body>
</html>
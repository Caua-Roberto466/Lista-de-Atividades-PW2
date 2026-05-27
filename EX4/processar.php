<?php
$a = (int) $_POST['a'];
$b = (int) $_POST['b'];

$temp = $a;
$a = $b;
$b = $temp;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de variáveis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-box">
        <h3>Resultado da troca</h3>
        <div class="card">
            <span class="card-label">Valor de A</span>
            <span class="card-value"><?= $a ?></span>
        </div>
        <div class="card">
            <span class="card-label">Valor de B</span>
            <span class="card-value"><?= $b ?></span>
        </div>
        <a class="back" href="ex4.html">← voltar</a>
    </div>
</body>
</html>
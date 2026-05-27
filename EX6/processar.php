<?php
$sal = (float) $_POST['sal'];
$grat = $sal * (10/100);
$impst = $sal * (20/100);
$salFinal = $sal + $grat - $impst; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>O valor final do salário é:</h3>
        <p class="resultado">
            <?= number_format($salFinal, 2, ',', '.') ?>
        </p>
        <a class="back" href="ex5.html">← voltar</a>
    </div>
</body>
</html>
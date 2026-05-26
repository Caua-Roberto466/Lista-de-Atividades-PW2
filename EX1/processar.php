<?php
$num = $_POST["numero"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada do <?= $num ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Tabuada do <?= $num ?></h3>
        <p class="subtitle">10 resultados</p>

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <div class="row">
                <span class="expr"><?= $num ?> × <?= $i ?></span>
                <span class="result"><?= $num * $i ?></span>
            </div>
        <?php endfor; ?>

        <a class="back" href="ex1.html">← voltar</a>
    </div>
</body>
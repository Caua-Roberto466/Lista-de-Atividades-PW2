<?php
$preco = (float) $_POST['produto'];
$porcentagem = (float) $_POST['porcentagem'];
$economizado = $preco * ($porcentagem / 100);
$final = $preco - $economizado;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-box">
        <h3>Resumo do desconto</h3>

        <div class="card">
            <span class="card-label">Preço original</span>
            <span class="card-value">R$ <?= number_format($preco, 2, ',', '.') ?></span>
        </div>

        <div class="card">
            <span class="card-label">Desconto aplicado</span>
            <span class="card-value">− R$ <?= number_format($economizado, 2, ',', '.') ?></span>
        </div>

        <div class="card highlight">
            <span class="card-label">
                Preço final
                <span class="badge"><?= $porcentagem ?>% off</span>
            </span>
            <span class="card-value">R$ <?= number_format($final, 2, ',', '.') ?></span>
        </div>

        <a class="back" href="ex2.html">← voltar</a>
    </div>
</body>
</html>

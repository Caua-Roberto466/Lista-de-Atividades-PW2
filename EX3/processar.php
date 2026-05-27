<?php
$nota1 = (float) $_POST['nota1'];
$nota2 = (float) $_POST['nota2'];
$nota3 = (float) $_POST['nota3'];
$nota4 = (float) $_POST['nota4'];
$soma  = $nota1 + $nota2 + $nota3 + $nota4;
$media = $soma / 4;

if ($media < 0 || $media > 10) {
    header("Location: ex3.html");
    exit();
}

$aprovado = $media >= 5;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-box">
        <p class="status <?= $aprovado ? 'aprovado' : 'reprovado' ?>">
            <?= $aprovado ? 'Aprovado' : 'Reprovado' ?>
        </p>
        <p class="media">Média: <?= number_format($media, 1, ',', '.') ?></p>
        <a class="back" href="ex3.html">← voltar</a>
    </div>
</body>
</html>
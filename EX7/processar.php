<?php
$nota1 = (float) $_POST['nota1'];
$nota2 = (float) $_POST['nota2'];
$nota3 = (float) $_POST['nota3'];
$nota4 = (float) $_POST['nota4'];

$soma = $nota1 + $nota2 + $nota3 + $nota4;
$media = $soma / 4;

if ($media < 3){
    $msg = "Retido";
}else if( $media < 6){
    $msg = "Exame";
}else{
    $msg = "Aprovado";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado das notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>A soma dos quadrados é:</h3>
        <p class="resultado">
            <?= number_format($media, 1, ',', '.')?>
            <?= $msg ?>
        </p>
        <a class="back" href="ex7.html">← voltar</a>
    </div>
</body>
</html>
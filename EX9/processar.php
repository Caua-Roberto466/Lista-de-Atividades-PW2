<?php
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

$soma = 0;

for($i = $inicio; $i <= $fim; $i++){
    if ($i % 2 != 0){
        $soma += $i;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos impares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>A soma dos ímpares é:</h3>
        <p class="resultado">
            <?= "$soma" ?>
        </p>
        <a class="back" href="ex9.html">← voltar</a>
    </div>
</body>
</html>
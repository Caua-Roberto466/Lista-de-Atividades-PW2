<?php
$num1 = (float) $_POST['num1'];
$num2 = (float) $_POST['num2'];
$operador = $_POST['operador'];

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        $operacao = "Soma";
        break;
    case '-':
        $resultado = $num1 - $num2;
        $operacao = "Subtração";
        break;
    case '*':
        $resultado = $num1 * $num2;
        $operacao = "Multiplicação";
        break;
    case '/':
        $resultado = $num1 / $num2;
        $operacao = "Divisão";
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3><?= $operacao ?></h3>
        <div class="card">
            <span class="card-label">Expressão</span>
            <span class="card-value"><?= $num1 ?> <?= $operador ?> <?= $num2 ?></span>
        </div>
        <div class="card highlight">
            <span class="card-label">Resultado</span>
            <span class="card-value"><?= number_format($resultado, 2, ',', '.') ?></span>
        </div>
        <a class="back" href="ex11.html">← voltar</a>
    </div>
</body>
</html>
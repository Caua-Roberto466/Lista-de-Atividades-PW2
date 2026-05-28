<?php
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

$numeros = [];

for($i = $inicio; $i <= $fim; $i++){
    if ($i % 2 != 0){
        array_push($numeros, $i);
    }
}
rsort($numeros)
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
        <h3>A lista dos ímpares é:</h3>
        <p class="resultado">
            <?php 
            foreach($numeros as $num){
                echo $num . "<br>";
            }
            ?>
        </p>
        <a class="back" href="ex12.html">← voltar</a>
    </div>
</body>
</html>
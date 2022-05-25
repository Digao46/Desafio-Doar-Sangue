<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de Sangue</title>
</head>

<body>
    <h1>Análise de doador de Sangue</h1>
    <hr>

    <?php
    $age = 10;
    $weight = 60;
    function isFit($age, $weight)
    {
        if ($age >= 16 && $age <= 69 && $weight >= 50) {
            echo "Legal, você está apto a doar sangue!";
        } else if ($age < 16 && $weight >= 50 || $age > 69 && $weight >= 50) {
            echo "Que pena, você não está apto por conta da idade";
        } else if ($age >= 16 && $age <= 69 && $weight <= 50) {
            echo "Que pena, você não está apto por conta do peso";
        }
    }
    ?>

    <p>Idade: <?= $age ?> anos </p>
    <p> Idade tem que estar entre 16 e 69 anos.</p>
    <p>Peso: <?= $weight ?>KG </p>
    <p> Peso minimo: 50KG.</p>
    <p>Apto? <?= isFit($age, $weight) ?></p>
</body>
</html>
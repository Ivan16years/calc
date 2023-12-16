<?php
$result = require __DIR__ . '/calc.php';
?>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="css/reuslt.css">
    <link rel="stylesheet" href="css/base.css">
    <title>Калькулятор</title>
</head>

<body>
    <div class="wrapper">
        <div class="block-result">
            <div class="desc">Результат вычислений:</div>
            <br>
            <div class="result">
                <?= $result ?>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('controller/controllerVeiculo.php');

    $listVeiculo = listarVeiculo();


    var_dump($listVeiculo);
        ?>
    
</body>
</html>
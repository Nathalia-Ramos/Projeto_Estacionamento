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

    foreach ($listVeiculo as $item){
        ?>
        <tr id="tblLinhas">
            <td class="tblColunas registros">
                <?= $item['placa']?>
            </td>
            <td class="tblColunas registros">
                <?= $item['marca']?>
            </td>
        </tr>
        <?php
    }

    ?>
</body>
</html>
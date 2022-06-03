<?php
    $form = (string)"router.php?component=clientes&action=inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div> 

    <form  action="<?=$form?>" name="frmCadastro" method="post" enctype="multipart/form-data">
    <div class="cadastroEntradaDeDados">    
        <input type="text" name="txtNome" value="<?=isset($nome)?$nome:null?>"
        placeholder="nome">
    </div>
    <div class="cadastroEntradaDeDados">
         <input type="text" name="txtMarca" value="<?=isset($marca)?$marca:null?>"
         placeholder="marca">
    </div>
    <div class="cadastroEntradaDeDados">
        <input type="text" name="txtPlaca" value="<?=isset($placa)?$placa:null?>"
        placeholder="placa">
    </div>
    
    <div class="enviar">
        <input type="submit" name="btnEnviar" value="Salvar">
        
    </div>
    </form>
   
</body>
</html>
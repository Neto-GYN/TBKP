<?php
    require 'includes/dados.php'

    /*
        include 
        - inclui um arquivo se o arquivo existir.
        - caso não exista, dá um erro do tipo WARNING e continua executando o código.
        - usado quando a inclusão do arquivo é opcional.

        require
        - inclui um arquivo se o arquivo existir.
        - caso não exista, dá um erro do tipo fatal e para a execução do código.
        - usado quando o código NÃO PODE continuar sem aquele arquivo.
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[AL-001] INCLUDES & REQUIRES</title>
</head>
<body>
    <h1><?= $info;?></h1>
</body>
</html>
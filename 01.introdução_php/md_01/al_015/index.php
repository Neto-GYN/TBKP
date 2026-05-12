<?php
    // float

    $numero = 1.75;

    echo "<br>";

    // arredondamento para numero mais proximo seja acima ou abaixo ex : 
    // 1.40 = 1
    // 1.60 = 2 

    echo "round : ".round($numero);

    echo "<br>";

    // arrendondamento sempre para baixo

    echo "floor : ".floor($numero);

    echo "<br>";

    // arrendondamento sempre para cima
    echo "ceil : ".ceil($numero);
    
?>
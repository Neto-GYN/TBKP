<?php

    $nome = "neto";

    // - Exibir
    echo $nome."<br>";
    // - Concatenar
    echo $nome.$nome.'<br>';

    // - Exibir com string
    echo "texto : $nome <br>";

    // - Quantidade de caracteres
    echo strlen($nome).'<br>';

    // - Busca a posição de uma palavra e uma String

    $texto = 'abc , def, gih';

    echo strpos($texto, "gih")."<br>";

    // - Retorna uma parte da String

    echo substr($texto, 11, 3);

?>
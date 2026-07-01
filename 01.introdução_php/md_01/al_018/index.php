<?php

$lista = ["Neto","Cris","PSN"];

// adicionar no inicio

    array_push($lista,"MSN");

// remover primeiro elemento

    array_shift($lista);

// remover ultimo elemento

    array_pop($lista);

// adicionar no indice

    $lista[2] = "Neto";

// subistituir valor do indice

    $lista[2] = "José Neto";

// contador de elementos dentro do array

    $contador = count($lista);

// retorna um boolean para o item que esta sendo procurado

    $resul = in_array("MSN", $lista);

// mesclar arrays

    $listaB = ["Eve", "PHP"];

    $listaC = array_merge($lista,$listaB);

// impressão

    echo "<pre>";
        var_dump($listaC);
    echo "</pre>";
 
?>
<?php

    // array

    $nomes = ["Neto", "DBD"];

    echo "<pre>";
        print_r($nomes);
    echo "</pre>";

    // array associativo

    $pessoa = [
        "nome"   => "Neto",
        "idade"  => 36,
        "peso"   => 80,
        "altura" => 1.80
    ];

    echo "<pre>";
        print_r($pessoa);
    echo "</pre>";

    // lista de arrays

    
        $lista = [
            "pessoa1" => [
                "nome"   => "Neto",
                "idade"  => 36,
                "peso"   => 80,
                "altura" => 1.80
            ],
            "pessoa2" => [
                "nome"   => "Cristina",
                "idade"  => 38,
                "peso"   => 63,
                "altura" => 1.63
            ]
        ];

    echo "<pre>";
        print_r($lista);
    echo "</pre>";

?>
<?php

/**
 * Verifica o dia da Semana
 * 
 * @param int $day - dia
 * 
 * @return string $$weekday - dia da semana
 */

function getDayOfWeek(int $day): string
{
    switch ($day) {
        case '1':
            return "Domingo";
            break;

        case '2':
            return "Segunda-Feira";
            break;

        case '3':
            return "Terça-Feira";
            break;
        
        case '4':
            return "Quarta-Feira";
            break;

        case '5':
            return "Quinta-Feira";
            break;
        case '1':
            return "Sexta-Feira";
            break;
            
        case '7':
            return "Sabado";
            break;

        default:
            return "Dia Invalido";
            break;
    }
}


// Laço de repetição while

    // while ($a <= 10) {
    //     # code...
    // }

// Laço de repetição do while

    // do while ($a <= 10) {
    //     # code...
    // }


// Laço de repetição for

    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }

// Laço de foreach

    // foreach ($variable as $key => $value) {
    //     # code...
    // }

?>
<?php

    function verifayAge(int $num1): string{

        $permittedAge = 18;

        if($num1 < $permittedAge){
            return "Entrada Negada";
        }

        if ($num1 >= $permittedAge) {
            return "Entrada Permitida";
        }else{
            return "Erro desconhecido";
        }
    }

?>
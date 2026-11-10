<?php
    /**
     * Verifica a idade
     * 
     * @param int $num1 Verifica se o valor e menor ou maior que $permittedAge
     * 
     * @return string retorna uma mensagem informando se a entrada e permitada ou não 
     */

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
<?php

const MALE_RETIREMENT_AGE = 65;
const FEMALE_RETIREMENT_AGE = 55;

/**
 * Calculo do Salário Anual
 * 
 * @param float $monthlySalary - Salário Mensal
 * 
 * @return float $annualSalary - Salário Anual
 */

function calculateAnnualSalary(float $monthlySalary): float
{
    $vacationBonus = $monthlySalary / 3;
    $annualSalary = ($monthlySalary * 13) + $vacationBonus;

    return $annualSalary;
}

/**
 * Quantidade de anos para aposentadoria
 * 
 * @param int $age - idade
 * @param string $sex - sexo
 * 
 * @return int $yearsToRetire - quantidade de anos para se aponsetar
 * 
 */

function getYearsToRetireByContribution(int $age, string $sex): int{

    $yearsToRetire = $sex == "M" ? MALE_RETIREMENT_AGE : FEMALE_RETIREMENT_AGE;
    return $yearsToRetire - $age;

}

/**
 * Verifica se esta empregado
 */

/**
 * Transforma um numero em valor monetário
 */

?>
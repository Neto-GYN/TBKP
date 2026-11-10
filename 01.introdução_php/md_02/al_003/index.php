<?php
    require 'includes/person.php';
    require 'includes/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[AL-003] FICHA CADASTRAL</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div>
        <table>
            <caption>DADOS</caption>
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>SEXO</th>
                    <th>SALARIO</th>
                    <th>SALARIO ANUAL</th>
                    <th>EMPREGADO</th>
                    <th>TEMPO RESTANTE DE CONTRIBUIÇÃO</th>
                    <th>HABILIDADES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $name;?></td>
                    <td><?= $age;?></td>
                    <td><?= $sex;?></td>
                    <td><?= $monthlySalary;?></td>
                    <td><?= calculateAnnualSalary($monthlySalary);?></td>
                    <td><?= $employe;?></td>
                    <td><?= getYearsToRetireByContribution($age, $sex);?></td>
                    <td><?= implode(',', $skills);?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>
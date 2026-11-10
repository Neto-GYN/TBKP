<?php
    require 'includes/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[AL-004] ESTRUTURAS DE REPETIÇÃO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div>
        <table>
            <caption>DIA DA SEMANA</caption>
            <thead>
                <tr>
                    <th>DIA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= getDayOfWeek(4);?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>
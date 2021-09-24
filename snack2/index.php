<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). 
Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php
require_once "partials/data.php";
require_once "partials/function.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php foreach ($students as $student) { ?>
    <li><strong> Studente: </strong></li>
    <em><?php echo $student["name"] . " " . $student["surname"] ?></em>

    <li><strong>Media dei voti: </strong></li>
        <?php echo get_average_grades($student["grades"]) ?>  
    <hr>
<?php } ?>
</ul>
</body>
</html>

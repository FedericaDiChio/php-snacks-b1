<!-- TRACCIA -->
<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
Stampare i numeri in pagina. -->

<?php 
require_once "partials/function.php";
$random_integers = get_random_number(1, 100, 15);
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
    <?php foreach ($random_integers as $random_integer) { ?>
    <span><?php echo $random_integer ?> </span>
    <?php } ?>
</body>
</html>
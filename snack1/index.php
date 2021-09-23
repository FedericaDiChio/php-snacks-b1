<!-- TRACCIA -->
<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
Stampare i numeri in pagina. -->

<!-- FUNZIONE -->
<?php 
function get_random_number($min, $max, $items){
    $random_numbers = [];
    while (count($random_numbers) < $items){
        $int = rand($min, $max );
        if(!in_array($int, $random_numbers)) {
            $random_numbers[] = $int;
        }
    } return $random_numbers;
}


$random_numbers = get_random_number(1, 100, 15);
var_dump($random_numbers);
// echo count($random_numbers);


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
    <?php foreach ($random_numbers as $random_number) { ?>
    <li><?php echo $random_number ?> </li>
    <?php } ?>
</body>
</html>
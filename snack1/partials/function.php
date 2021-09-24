<?php
function get_random_number($min, $max, $items)
{
    $random_numbers = [];
    while (count($random_numbers) < $items){
        $int = rand($min, $max );
        if(!in_array($int, $random_numbers)) {
            $random_numbers[] = $int;
        }
    } return $random_numbers;
}



// var_dump($random_numbers);
// echo count($random_numbers);

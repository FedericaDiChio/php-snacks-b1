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
// var_dump($random_numbers);
// echo count($random_numbers);

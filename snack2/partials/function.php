<?php 

function get_average_grades($numbers) 
{
    $tot_grades = count($numbers);
    $tot = array_sum($numbers);
    $average_grades = $tot / $tot_grades;
    return round($average_grades, 1);
};
?>
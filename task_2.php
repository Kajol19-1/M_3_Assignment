<?php
function removeEvenNumbers(&$numbers) {
    $numbers = array_filter($numbers, function($value) {
        return $value % 2 != 0; 
    });
}

$numbers = range(1, 10);

removeEvenNumbers($numbers);

print_r($numbers);
?>

<?php

$grades = array(85, 92, 78, 88, 95);

arsort($grades);

print_r($grades);

foreach($grades as $grade){
    echo $grade."\n";
}
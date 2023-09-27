<?php

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 86, 'Science' => 89),
);

function calculateAverageGrades($studentGrades) {


    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student {$student}'s Average Grade: $average\n";
    }
}


calculateAverageGrades($studentGrades);
?>
<?php
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
$totalAge = 0;
$totalStudents =count($students);
foreach ($students as $key => $studentAge){
    echo $key. " a " . $studentAge . " ans.". PHP_EOL;
    $totalAge = $totalAge + $studentAge;
}
echo "L'âge moyenne est de " . $totalAge / $totalStudents ." ans." . PHP_EOL;
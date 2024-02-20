<?php
//traditionl arrays
// $cars = ['Toyota', 'Volvo', 'BMW'];

// print_r($cars);

// echo $cars[0]; // Toyota

// if(isset($cars[3]))
// {
//     echo $cars[3];
// }
// else
// {
//     echo 'the car does not exist';
// }

//associative array
$carInfo = [
    'make' => 'Toyota', 
    'model' => 'Camry',  
    'year' => 2016
];

echo $carInfo['make'] . '<br>'; // Toyota
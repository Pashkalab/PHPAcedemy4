<?php

spl_autoload_register(function($className) {
    $file = "{$className}.php";
    
    $file = str_replace(
        '\\', 
        DIRECTORY_SEPARATOR, 
        $file
    );
    
    if (!file_exists($file)) {
        die("{$file} not found");
    }
    
    require_once $file;
});


function printName(Figure $figure)
{
    echo $figure->getName() . '<br>';
}


$figureNames = ['Circle', 'Triangle', 'Rectangle'];
$length = count($figureNames);

$figures = [];

for ($i = 1; $i <= 10; $i++) {
    $index = rand(0, $length - 1);
    $figure = $figureNames[$index];
    $figure = new $figure();
    
    $figures[] = $figure;   
}


foreach ($figures as $figure) {
    printName($figure);
}

$in = new Car("bmw", "x6", "159.333");

print_r($in->toArray());



// var_dump($figures);





// $className = 'Car';

// $vehicle = new Vehicle(1000);
// $vehicle->stop();


// var_dump($vehicle);


// $car = new Car('a', 'b',90876);
// // $car->setPrice(10230);
// $car->stop();
// var_dump($car);

// echo $car;



// new Circle();

// $car2 = new Car('BMW', 'E92');


// echo $car1;

// var_dump($car1, $car2);
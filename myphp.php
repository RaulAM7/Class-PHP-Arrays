<?php

// Clase Arrays

$array_name0  = [];

$array_name0 = ['Raul', 'Artiles'];

$array_name0 = ['Elemento0','Elemento1'];

// Accesing arrays elements

$array_name = [ 'Value1', 'Value2', 'Value3' ];

var_dump( $array_name [0]);
var_dump( $array_name [1]);
var_dump( $array_name [2]);


// Array methods

$names = [ 'Mario', 'Luisa', 'Andrés' ];

array_push( $names, 'Raul' );

// Splice -> elimina y puede reemplazar

$fruits = ['apple','banana','orange','pear','apricot','cherry'];
print_r($fruits);

array_splice($fruits, 3, count($fruits), [['new Element0', 'new Element1']]);

print_r($fruits);


// Array_slice

$array78 = [
    0 => 1,
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
];

print_r(array_slice($array78, 5, 2, true));


$os = array("Microsoft", "MacOS", "Solaris", "Unix",  "Linux");

if (in_array('Unix', $os, true)) { echo 'Got Unix'.PHP_EOL;}

if (in_array('MacOS', $os, true)) { echo 'Got MacOS'.PHP_EOL;}



// Multidimensional Arrays 


$list = [0, 2, 4, 6, 8, 10];

$matrix = [
		[0, 1, 2, 3],   // sequence
		[0, 2, 4, 6],   // even
		[1, 3, 5, 7],   // odd
		[2, 4, 8, 16]  // power of 2
];

// Traversing a multidimensional array

for ( $i = 0; $i < count($matrix); $i++ ) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo $matrix[$i][$j].PHP_EOL;
    }
}


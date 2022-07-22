<?php

// INTEGER

echo "<h1>Integer</h1>";
$x = 6879;
var_dump(is_int($x));

// ****************************************************************

//FLOAT

echo "<h1>Float</h1>";

$x = 10.365;
var_dump(is_float($x));

// ****************************************************************

//INFNITY

echo "<h1>Infnity</h1>";

$x = 1.9e411;
var_dump($x);

// ****************************************************************

// NAN

echo "<h1>Nan</h1>";

$x = acos(8);
var_dump($x);


// ****************************************************************

// NUMERICAL

echo "<h1>Numerical</h1>";

$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump($x);


// ****************************************************************

// CASTING STRINGS AND FLOATS TO INTEGERS

echo "<h2>Casting Strings and Floats to Integers</h2>";

//cast float to int

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";

// cast str to int

$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>
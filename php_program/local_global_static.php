<?php

echo "<h2>LOCAL || GLOBAL || STATIC</h2>";


// global scope
// $x = 5;

// function myTest() {
//     echo "<p>Variable x inside function is: $x</p>";
// }

// myTest();

// echo "<p>Variable x outside function is: $x</p>"

// ****************************************************************

// local scope
// function myTest() {
//     $x = 5;
//     echo "<p>Variable x inside function is: $x</p>";
// }

// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// ****************************************************************

//global  keyword
// $x = 5;
// $y = 10;

// function myTest() {
//     global $x, $y;   
//     $y = $y + $x;
// }

// myTest();
// echo $y;

// ****************************************************************

// GLOBALS[index] index
// $x = 5;
// $y = 15;

// function myTest() {
//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y;

// ****************************************************************

// static keyword
// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// myTest();
// echo "<br>";
// myTest();
// echo "<br>";
// myTest();

// ****************************************************************
?>
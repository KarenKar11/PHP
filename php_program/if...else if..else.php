<?php

// if Statement

echo "<h1>If</h1>";

$t = date("H");

if ($t < 20) {
    echo "have a good day";
}

// ****************************************************************
echo "<br>";


// if...else statement

echo "<h1>If...Else</h1>";


$t = date("H");

if($t < 1) {
    echo "have a good day";
} else {
    echo "have a good night";
}

echo "<br>";


// ****************************************************************

// if...else if ... else statement

echo "<h1>If...ElseIf...Else</h1>";


$t = date("H");

if($t < 10) {
    echo "have a good morning";
} else if ($t < 20) {
    echo "have a good day";
} else {
    echo "have a good night";
}


// ****************************************************************

echo "<br>";

// switch statemnet

echo "<h1>Switch</h1>";


$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your color is red";
        break;
    case "blue":
        echo "Your color is blue";
        break;
    default:
        echo "Your color is neither red, blue";
}

?>
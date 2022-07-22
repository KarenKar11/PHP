<?php

echo "<h1>FUNCTION</h1>";

// ****************************************************************

// built-in functions

echo "<h3>Built-in Function</h3>";

function writeMsg() {
    echo "Hello World";
}

writeMsg();

// ****************************************************************
echo "<br>";

echo "<h3>Function Arguments</h3>";

// function arguments

function familyName($fname) {
    echo "$fname Refsnes. <br>";
}

familyName("Jani");
familyName("Hege");
familyName("Kai Jim");


// two argument function

echo "<h3>Two Arguments Function</h3>";


function familyNameTwo($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyNameTwo("John", "1975");
familyNameTwo("Stale", "1978");
familyNameTwo("Hege", "1983");


// ****************************************************************

echo "<br>";

echo "<h3>Loosely Typed Language</h3>";

function addNumbers ($a, $b) {
    return $a + $b;
}

echo addNumbers(5, "5 days");
// քանի որ strict-ը միացված չէ "5 days"-ը փոխվել է int 5-ի և կվերադարձնի 10


// ****************************************************************

echo "<br>";

echo "<h3>Arguments By Reference</h3>";

echo "<p>Երբ ֆունկցիայի argument-ը փոխանցվում է հղումով, argument-ի փոփոխությունները փոխում են նաև փոխանցված փոփխ․։ֆունկցիայի argument-ը հղում սարքելու համար օգտ․ & օպերատորը։</p>";

function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;



?>
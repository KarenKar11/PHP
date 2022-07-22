<?php

// while loop

echo "<h1>While Loop</h1>";

echo "1-5";
echo "<br>";    


$x = 1;

while($x <= 5) {
    echo "the number is: $x <br>";
    $x ++;
}


echo "<br>";


echo "10-100";

echo "<br>";


$x = 0;

while ($x <= 100) {
    echo "the number is: $x <br>";
    $x += 10;
}


// ****************************************************************

// do...while loop

echo "<h1>Do...While Loop</h1>";

$x = 1;

echo "1-5";
echo "<br>";  

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo "<br>";

echo "6";
echo "<br>";
$x = 6;
do {
    echo "the number is: $x <br>";
    $x++;
} while ($x <= 5);


// ****************************************************************

// for loop

echo "<h1>For Loop</h1>";

echo "1-10";
echo "<br>";

for ($x = 0; $x <= 10;$x++) {
    echo "the number is: $x <br>";
}

echo "<br>";

echo "10-100";
echo "<br>";

for($x = 0;$x <= 100;$x +=10) {
    echo "the number is: $x <br>";
}


// ****************************************************************

// foreach loop

echo "<h1>ForEach Loop</h1>";

echo "array-ի արժեքները";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value) {
    echo "$value <br>";
}

echo "<br>";


echo "array-ի key/value";
echo "<br>";



$age = array("Petter" => 35, "Ben" => 57, "Poxos" => 25);

foreach ($age as $x => $val) {
    echo "$x = $val <br>";
}

?>
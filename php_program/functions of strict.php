<?php declare(strict_types=1);

echo "<h1>Strict</h1>";

// ****************************************************************

function addNumbers(int $a, int $b) {
    return $a + $b;
}

// echo addNumbers(5, "5 days");
echo "Error: քանի որ '5 days' int չէ և error կտա";

// ****************************************************************

echo "<br>";

echo "<h3>Default Argument Value</h3>";

function setHeight(int $ninheight = 50) {
    echo "the height is : $ninheight <br>";
}

setHeight(350);
echo "կօգտագործի 50-ը default value - ";
setHeight(); 
setHeight(135);
setHeight(80);


// ****************************************************************

echo "<br>";

echo "<h3>Function-Returning Values</h3>";

function sum (int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

// ****************************************************************

echo "<br>";

echo "<h3>Return Type Declarations</h3>";

echo "<p>ֆունկցիայի վերադարձի տեսակը գրելու համար ֆունկցիա գրելիս ավելացրեք (:) և տեսակը ({) առաջ։</p>";

function addNumbersTwo(float $a, float $b) : float {
    return $a + $b;
}

echo addNumbersTwo(1.2, 5.2);

// ****************************************************************

echo "<br>";

echo "<p>Կարող ենք նաև նշել վերադարձի այլ տեսակ, քան argument-ը, բայց համոզվենք, որ վերադարձը ճիշտ տեսակն է։</p>";

function addNumbersThree (float $a, float $b) : int {
    return (int) ($a + $b);
}

echo addNumbersThree(2.3,2.1);

?>
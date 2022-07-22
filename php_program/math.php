<?php

echo "<h2>MATH</h2>";

// MATH

// pi() function
echo (pi());
echo " - վերադարձնում է PI-ի արժեքը։";


// min() and max() functions
$x = [0, 150, 30 ,20,-8,-200];
echo "<br>";
echo (min($x));
echo " - վերադարձնում է ամենափոքր արժեքը։";
$y = [0, 150, 30 ,20,-8,-200];
echo "<br>";
echo (max($y));
echo " - վերադարձնում է ամենամեծ արժեքը։";


// abs() function
$a = -12345.546;
echo "<br>";
echo (abs($a));
echo " - վերադարձնում է թվի բացարձակ (դրական) արժեքը։";

// sqrt() function
$s = 64;
echo "<br>";
echo (sqrt($s));
echo " - վերադարձնում է թվի քառակուսի արմատը։";


// round() function

$r = 0.60;
echo "<br>";
echo (round($r));
echo " - կլորացնում է float թիվը մինչև նրա մոտակա ամբողջ թիվը։";

// rand() function

// echo (rand(10, 100));

//
?>
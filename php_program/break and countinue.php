<?php

// break

echo "<h1>Break</h1>";

echo "4-ից դուրս է գալիս loop-ը";
echo "<br>";

for ($x = 0; $x < 10; $x++) { 
   if ($x == 4) {
    break;
   }
   echo "the number is: $x <br>";
}

// ****************************************************************

//continue

echo "<h1>Continue</h1>";

echo "4-րդը դուրս է հանում loop-ից";
echo "<br>";

for ($x = 0; $x < 10; $x++) { 
    if ($x == 4) {
     continue;
    }
    echo "the number is: $x <br>";
 }



// ****************************************************************

//break and continue in while loop

echo "<h1>Break and Continue in while loop</h1>";

// break example

echo "<h3>Break Example</h3>";
echo "<br>";

$x = 0;

while ($x < 10) {
    if($x == 4) {
        break;
    }
    echo "the number is: $x <br>";
    $x++;
}


// continue example

echo "<h3>Continue Example</h3>";
echo "<br>";

$x = 0;

while ($x < 10) {
    if( $x == 4) {
        $x ++;
        continue;
    }
    echo "the number is: $x <br>";
    $x ++;
}

?>
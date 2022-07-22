<?php

echo "<h1>Arrays</h1>";

echo "<h5>Array-ը պահում է բազմաթիվ արժեքներ մեկ փոփխականում։</h5>";

echo "<h5>Օրինակ'</h5>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


// ****************************************************************

echo "<br>";



echo "<h2>What is an Array</h2>";

echo "<h5>Եթե ունենք ցանկ (օրինակ մեքնանաերի) մեքենաները այսպիսի տեսք ունենալ։</h5>";

echo "<h5>Օրինակ'</h5>";

echo $cars1 = "Volvo";
echo "<br>";
echo $cars2 = "BMW";
echo "<br>";
echo $cars = "Toyota";

// ****************************************************************

echo "<br>";


echo "<h2>Create an Array</h2>";

echo "<h5>PHP-ում կան 3 տեսակի զանգվածներ</h5>";

echo "<h5>• Ինդեքսավորված զանգվածներ - թվային ինդեքսով զանգված։</h5>";
echo "<h5>• Ասոցիատիվ - զանգվածներ անվանված ստեղներով։</h5>";
echo "<h5>• Բազմաչափ - մեկ կամ մի քանի զանգված պարունակող զանգվածեր։</h5>";

// ****************************************************************

echo "<br>";

echo "<h2>count() Function</h2>";

echo "<h5>count() ֆունկցիան օգտագործվում է զանգվածի երկարությունը վերադարձնելու համար։</h5>";

echo "<h5>Օրինակ'</h5>";

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);


// ****************************************************************

echo "<br>";

echo "<h2>Indexed Arrays</h2>";

echo "<h5>Ինդեքսավորված զանգվածներ ստեղծելու 2 եղանակ կա։Ինդեքսը կարող է նշանակվել ավտոմատ կերպով այսպես։</h5>";

echo "cars = array('Volvo', 'BMW', 'Toyota');";

echo "<h5>Կամ ինդեքսը կարող է նշանակվել ձեռքով․</h5>";

echo "<h5>Օրինակ'</h5>";


echo $cars[0] = "Volvo";
echo "<br>";
echo $cars[1] = "BMW";
echo "<br>";
echo $cars[2] = "Toyota";

echo "<h5>Օրինակ'</h5>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// ****************************************************************

echo "<br>";

echo "<h2>Loop Through an Indexed</h2>";

echo "<h5>Ինդեքսավորված զանգվածի բոլոր արժեքները պտտելու համար կարող եք օգտագործել for-ը</h5>";

echo "<h5>Օրինակ'</h5>";

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count ($cars);
for($x = 0;$x < $arrlength;$x++) {
    echo $cars[$x];
    echo "<br>";
}

// ****************************************************************

echo "<h2>Associative Arrays</h2>";

echo "<h5>Ասոցիատիվ զանգված ստեղծելու թ եղանակ կա․</h5>";
echo "<br>";

echo "age = array('Petter' => 35,'Ben' => 37); ";
echo "<br>";

echo "<h5>կամ։</h5>";

echo "<p>age['Petter'] = 35;</p>";
echo "<p>age[Ben] = 37;</p>";

echo "<h5>Օրինակ՛</h5>";

$age = array("Petter" => 35,"Ben" => 37, "Joe" => 45);
echo "Petter is " . $age['Petter'] . " years old.";
echo "<br>";
echo "Ben is " . $age['Ben'] . " years old.";
echo "<br>";
echo "Joe is " . $age['Joe'] . " years old.";


// ****************************************************************
echo "<br>";

echo "<h2>Loop Throgh an Associative Arrays</h2>";

echo "<h5>Ասոցիատիվ զանգվածի բոլոր արժեքները պտտելու համար և տպելու համար կարող եք օգտագործենք foreach-ը</h5>";

echo "<h5>Օրինակ՛</h5>";

$age = array("Petter" => 35,"Ben" => 37, "Joe" => 45);

foreach($age as $x => $x_value) {
    echo "Key = " . $x . " , Value = " . $x_value . "<br>";
}




// ****************************************************************
echo "<br>";

echo "<h2>Multidimensional Arrays</h2>";

echo "<h5>Բազմաչափ զանգվածը մեկ կամ մի քանի զանգված պարունակող զանգված է։</h5>";

echo "<h4>Զանգվածի չափը ցույց է տալիս այն ինդեքսի քանակը, որոնք անհրաժեշտ են տարր ընտրելու համար։</h4>";


echo "<h5>• Երկչափ զանգվածի համար տարր ընտրելու համար անհրաժեշտ է 2 ինդեքս։</h5>";
echo "<h5>• Եռաչափ զանգվածի համար անհրաժեշտ է 3 ինդեքս։</h5>";

// ****************************************************************
echo "<br>";

echo "<h2>Two-Dimessional Arrays</h2>";

echo "<h5>Երկչափ զանգվածը զանգվածների զանգվածն է։</h5>";

echo '$cars = array (
   array("Volvo", 23, 18),
   array("BMW", 15, 13),
   array("Land Rover", 17, 15)
);';

echo "<h5>Այժմ երկչափ cars զանգվածը պարունակում է 4 զանգված և այն ունի 2 ինդեքս տող և սյուն</h5>";

echo "<h5>Օրինակ</h5>";

$cars = array (
    array("Volvo", 23, 18),
    array("BMW", 15, 13),
    array("Land Rover", 17, 15)
 );


 echo $cars[0][0] . " In stock: " . $cars[0][1] . " sold: " .$cars[0][2] . "<br>";
 echo $cars[1][0] . " In stock: " . $cars[1][1] . " sold: " .$cars[1][2] . "<br>";
 echo $cars[2][0] . " In stock: " . $cars[2][1] . " sold: " .$cars[2][2] . "<br>";


 echo "<h5>Կարող ենք նաև loop դնել for մեկ այլ for-ի ներսում cars զանգվածի տարրերը ստանալու համար։</h5>";
 echo "<h5>Օրինակ</h5>";

 
 for($row = 0;$row < 4;$row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
      for($col = 0;$col < 3;$col++) {
        echo "<li>" . $cars[$row][$col] ."</li>";
      }
    
    "</ul>";
 }






?>
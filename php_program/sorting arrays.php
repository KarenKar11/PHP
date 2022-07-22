<?php

echo "<h1>Sorting Arrays</h1>";

echo "<h5>Զանգվածի տարրերը կարող են դասակարգվել այբենական կամ թվային կարգով,աճող/նվազող։</h5>";

// ****************************************************************
echo "<br>";

echo "<h2>Sort Function For Arrays</h2>";

echo "<h5>PHP-ի զանգվածի տեսակավորման գոռծառույթները․</h5>";

echo "<h5>• sort() - դասավորել աճման կարգով,</h5>";
echo "<h5>• rsort() - դասավորել նվազման կարգով,</h5>";
echo "<h5>• asort() - տեսակավորել ասոցիատիվ զանգվածները աճման կարգով՛ ըստ արժեքի,</h5>";
echo "<h5>• ksort() - տեսակավորել ասոցիատիվ զանգվածները աճման՛ ըստ բանալիի,</h5>";
echo "<h5>• arsort() - տեսակավորել ասոցիատիվ զանգվածները նվազման կարգով՛ ըստ արժեքի,</h5>";
echo "<h5>• krsort() - տեսակավորել ասոցիատիվ զանգվածները նվազման կարգով՛ ըստ բանալիի։</h5>";

// ****************************************************************
echo "<br>";

echo "<h2>Sort Array in Asconding Order - sort()</h2>";

echo "<h5>cars զանգվածի տարրերը դասավորվում են աճման այբենական կարգով․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$cars = array("Volvo", "BMW", "Toyoto"); <br>
echo sort($cars);';

echo "<h5>numbers զանգվածի տարրերը դասավորվում են աճման թվային կարգով․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$numbers = array(4, 6, 2, 22, 11); <br>
echo sort($numbers);';


// ****************************************************************
echo "<br>";

echo "<h2>Sort Array in Descending ORder - rsort()</h2>";

echo "<h5>cars զանգվածի տարրերը դասավորվում են այբենական նվազման կարգով․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$cars = array("Volvo", "BMW", "Toyota"); <br>
echo rsort($cars);';

echo "<h5>numbers զանգվածի տարրերը դասավորվում են նվազման թվային կարգով․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$numbers = array(4, 6, 2, 22, 11); <br>
echo sort($numbers);';

// ****************************************************************
echo "<br>";


echo "<h2>Sort Array (Ascending Order), Acording to Value - asort()</h2>";

echo "<h5>Տեսակավորմ է ասոցիատիվ զանգվածը աճման կարգով ըստ արժեքի․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$age = array("Petter" => 35,"Ben" => 37, "Joe" => 45); <br>
echo asort($age);';


// ****************************************************************
echo "<br>";


echo "<h2>Sort Array (Ascending Order), Acording to Key - ksort()</h2>";

echo "<h5>Տեսակավորմ է ասոցիատիվ զանգվածը աճման կարգով ըստ բանալիի․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$age = array("Petter" => 35,"Ben" => 37, "Joe" => 45); <br>
echo ksort($age);';

// ****************************************************************
echo "<br>";


echo "<h2>Sort Array (Descending Order), Acording to Value - arsort()</h2>";

echo "<h5>Տեսակավորմ է ասոցիատիվ զանգվածը նվազման կարգով ըստ արժեքի․</h5>";

echo "<h5>Օրինակ</h5>";

echo '$age = array("Petter" => 35,"Ben" => 37, "Joe" => 45); <br>
echo arsort($age);';


// ****************************************************************
echo "<br>";


echo "<h2>Sort Array (Descending Order), Acording to Key - krsort()</h2>";

echo "<h5>Տեսակավորմ է ասոցիատիվ զանգվածը նվազման կարգով ըստ բանալիի</h5>";

echo "<h5>Օրինակ</h5>";

echo '$age = array("Petter" => 35,"Ben" => 37, "Joe" => 45); <br>
echo krsort($age);';



?>
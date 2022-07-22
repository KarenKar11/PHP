<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>

<body>
    <!-- $REQUEST -->
    <!-- <form method="post" action=" <?php //echo $SERVER['PHP_SELF']; ?>">
        NAME: <input type="text" name="fname">
        <input type="submit">
    </form> -->
    <!-- $REQUEST -->

    <!-- _POST -->

 <!-- <form method="post" action=" <?php //echo $SERVER['PHP_SELF']; ?>">
        NAME: <input type="text" name="fname">
        <input type="submit">
    </form> -->

    <!-- _POST -->

    <!-- _GET -->

    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

    <!-- _GET -->

    <?php

    echo "<h1>Global Variables - Superglobals</h1>";

    echo "<h5>PHP - սուպերգլոբալ փոփխականներն են․</h5>";

    echo "<h5>• GLOBALS</h5>";
    echo "<h5>• _SERVER</h5>";
    echo "<h5>• _REQUEST</h5>";
    echo "<h5>• _POST</h5>";
    echo "<h5>• _GET</h5>";
    echo "<h5>• _FILES</h5>";
    echo "<h5>• _ENV</h5>";
    echo "<h5>• _COOKIE</h5>";
    echo "<h5>• _SESSION</h5>";

    echo "<h2>GLOBALS</h2>";

    echo "<h5>GLOBALS-ը PHP-ի գերգլոբալ փոփխ․ է, որն օգտագործվում է PHP սկրիպտի ցանկացած գլոբալ փոփոխ․ մուտք գործելու համար</h5>";

    echo "<h5>Օրինակ</h5>";

    $x = 75;
    $y = 25;

    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;

    // ****************************************************************
    echo "<br>";


    echo "<h2>_SERVER</h2>";

    echo "<h5>_SERVER-ը PHP-ի գերգլոբալ փոփխ․ է, որը ինֆորմացիա է պահում վերնագրերի,ուղեների և սեցենարների տեսակայման մասին։</h5>";

    echo "<h5>Օրինակ</h5>";

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGEN'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    // ****************************************************************
    echo "<br>";


    echo "<h2>_REQUEST</h2>";

    echo "<h5>_REQUEST-ը Օգտագործվում է տվյալների հավաքագրման համար HTML ներկայացնելուց հետո։</h5>";

    echo "<h5>Օրինակ</h5>";

    echo  ' if($_SERVER["REQUEST_METHOD"] == "POST") { <br>
        $name = $_POST["$fname"]; <br>
        if($empty($name)) {<br>
            echo "Name is empty ";<br>
         } else {<br>
            echo $name;
         }<br>
        
        }';

    // ****************************************************************
    echo "<br>";


    echo "<h2>_POST</h2>";

    echo "<h5>_POST-ը Օգտագործվում է տվյալներ հավաքելու համար method='post' HTML ներկայացնելուց հետո։_POST-ը նույնպես լայնորեն օգտ․ է փոփոխ․ ոփխանցելու համար։Եթե ցանկանում ենք օգտ․մեկ այլ PHP ֆայլ տվյալները մշակելու համար, այն փոփխարինենք մեր ընտրած ֆայլի անունով։Հետո կարող ենք օգտ․ _POST փոփխ․ դաշտի արժեքը հավաքելու համար։</h5>";

    echo "<h5>Օրինակ</h5>";

    echo ' if($_SERVER["REQUEST_METHOD"] == "POST") { <br>
    $name = $_POST["$fname"]; <br>
    if($empty($name)) {<br>
        echo "Name is empty ";<br>
     } else {<br>
        echo $name;
     }<br>
    
    }';


    // ****************************************************************
    echo "<br>";


    echo "<h2>_GET</h2>";

    echo "<h5>_GET-ը օգտագործվում է տվյալները հավաքելու համար HTML ձևը get մեթոդով ներկայացնելուց հետո։GET-ը կարող է նաև հավաքել URL-ում ուղարկած տվյալները</h5>";

    echo "<h5>Օրինակ</h5>";

    echo "Study ". $_GET['subject'] . " at " . $_GET['web'];
    ?>
</body>

</html>
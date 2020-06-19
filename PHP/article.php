<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>

<body>
    <?php
    /*

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }



    $luck = array(4, 5, 6, 7, 8, 9, 68);
    for ($i = 0; $i <= count($luck); $i++) {
        echo "$luck[$i] <br>";
    }



    //arrays
    $arr = array(2, 3, 4, "a", "bacd");
    $aye = count($arr);
    for ($i = 0; $i <= $aye; $i++) {
        echo "$arr[$i] <br>";
    }
    echo "<br>";
    print_r($arr);
    echo "<br>";


    // indexed string array


    $lol = array("ksak", "kahsfj", "ajskbgkj", "akjfs");
    $lol[4] = "shagun";

    echo count($lol);
    echo "<br>";
    echo "This is" . $lol[4] . ".";


    //  star pattern
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
            if ($j < $i) {
                echo "&nbsp ";
            }
        }
        echo "<br>";
    }

    //associative array
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.";


    //array length
    $name = array("asafa", "asfaefg", "Tosftadfaf");
    $arrlength = count($name);
    echo "<br>";
    echo $arrlength;





    $var = 3;

    for ($i = 1; $i <= 10; $i++) {
        echo $var . "*" . $i . "=" . $i * $var;

        echo  $i * $var;
        echo '<br>';
    }




    $arr1 = array(2324, 4542, 2424);
    if ($arr1[0] >= $arr1[1] && $arr1[0] >= $arr1[2] && $arr1[0] >= $arr1[3]) {
        echo "$arr1[0] is largest";
    } elseif ($arr1[1] >= $arr1[0] && $arr1[1] >= $arr1[2] && $arr1[1] >= $arr1[3]) {
        echo "$arr1[1] is the largest";
    } else {
        echo "$arr1[2] is the largest";
    }


    //Finding ithe largest number    
    $arr1 = array(2324, 4542, 2424);
    if ($arr1[0] >= $arr1[1] && $arr1[0] >= $arr1[2] && $arr1[0] >= $arr1[3]) {
        echo "$arr1[0] is largest";
    } elseif ($arr1[1] >= $arr1[0] && $arr1[1] >= $arr1[2] && $arr1[1] >= $arr1[3]) {
        echo "$arr1[1] is the largest";
    } else {
        echo "$arr1[2] is the largest";
    }

     $arr2 = array(21, 23, 54);
    $sorted = sort($arr2);
    echo $sorted[$arr2[1]];
*/
    //Finding the second largest number




    $cookies = array(
        "chocolate" => "20",
        "vanilla" => "14",
        "strawberry" => "18",
        "raspberry" => "19",
        "bluebery" => "29"
    );


    arsort($cookies);
    $keys = array_keys($cookies);

    echo $keys[1]; // chocolate
    echo $cookies[$keys[1]]; // 20

    ?>




</body>

</html>
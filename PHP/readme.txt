
<?php
#LOLZ

/*comemments are cools*/

//this is a comment so that you understand
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
 
?>

echo "oh there! the value of x in the function is:$x";


            <?php
            $t = date("H");

            if ($t < "10") {
                echo "Have a good day!";
            }
            elseif ($t <"20") {
                echo "Have a good night";
                }
                else{
                    echo "Go to bed Dumbo";
                }
            ?>



            <?php
$favcolor = "red";
switch($favcolor) {

    case "red":
    echo "Your favourite color is red";
    break;
    case "blue":
    echo "Your favourite color is blue";
    case "green":
    echo "Your favourite color is green";
    case "yellow":
    echo "Your favourite color is yellow";
}
 
?>

Your Age is <?php  echo $GET["age"] ?>

Your Name is 



<--------------->

mad libs

COLOR:<input type="text" name="color" id="">
<br>
NOUN: <input type="text" name="noun" id="">
<br>
CELEBRITY: <input type="text" name="celebrity" id="">
<br>
<input type="submit" value="Submit">

<?php 
$color = $_GET["color"];
$noun = $_GET["noun"];
$celebrity = $_GET["celebrity"];
echo "Roses are $color <br>";
echo "$noun are blue <br>";
echo "Hail $celebrity <br>"?>;

<------------------------------------>


PASSWORD AND POST


<form action="index.php" method="post">
Password: <input type="password" name="pass" id="">
<br>
<input type="submit" value="Submit">
</form>


<?php
echo $_POST["pass"] ?>


<---------------------------------------->

ARRAYS


$lol = array("ksak","kahsfj","ajskbgkj","akjfs");
$lol[4] = "shagun";

echo count($lol);

<------------------------------------------>

CHECKBOXES AND ORDER OF CHECKBOXES


form action="index.php" method="post">
Apple:<input type="checkbox" name="fruits[]" id="" value="apples">
<br>
Orange:<input type="checkbox" name="fruits[]" id="" value="Oranges">
<br>
Kiwi:<input type="checkbox" name="fruits[]" id="" value="Kiwi">
<br>
<input type="submit" value="Submit">

</form>

<?php
$fruits = $_POST["fruits"];
echo $fruits[1];
?>



<------------------------>


FORM and its input giving result using php

<form action="index.php" method="post">
Name:<input type="text" name="student" id="">
<br>
<input type="submit" value="Submit">

</form>


<?php 

$grade = array("Id10t"=>"A+", "shagun"=>"O", "attri"=>"A");
echo $grade[$_POST["student"]];


?>

<----------------------------------------------------->
FUNCTIONS



<?php 
function hi($age, $name){
echo "Hello World! $name is $age years old <br>";
}

hi("18","shagun");
hi("18","shagun");
hi("18","shagun");
hi("18","shagun");


?>

<------------------------------------------------>

FUNCTIONS


?php

function cube($number){
    return $number**$number;
}

$cubr = cube(3);

echo $cubr;
?>


<---------------------------------->


IF else

$isMale = true;
$isaTall = false;
if($isMale && $isaTall){
    echo "you are a tall male";
}
elseif($isMale && !$isaTall)
{
    echo "you are a short male";
}   
elseif(!$isMale && $isaTall)
{
    echo "you are not male but short";
}   
else{
    echo "you are not male"; 
}


<---------------------------->


calci




$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
echo $num1 + $num2;
}
elseif($op == "-") {
    echo $num1 - $num2;
    # code...
}
elseif($op == "*") {
    echo $num1 * $num2;
    # code...
}
elseif($op == "/") {
    echo $num1 / $num2;
    # code...
}
elseif($op == "%") {
    echo $num1 % $num2;
    # code...
}
else{
    echo "Invalid Operation";
}

<----------------------->


switch



$grade = $_POST["grade"];
switch($grade){
    case "A":
    echo "NOcie boi";
    break;
    case "B":
    echo "bOcie boi";
    break;
    case "C":
    echo "COcie boi";
    break;
    case "D":
    echo "DOcie boi";
    break;
    case "E":
    echo "EOcie boi";
    break;
    default:
    echo "NOt COWEL";
    }


<----------------------------------->

for loops


$luck = array(4,5,6,7,8,9,68);
for ($i=0; $i <=count($luck); $i++) {
    echo "$luck[$i] <br>";
    # code...


    <------------------------------->

    LINKING pages



<?php include "header.html" ?>
<p>HELLO!</p>
<?php include "footer.html" ?>


<?php $title = "My First Post";
$author = "Mikr";
$wordc = "400";
 include "article.php" ?>


 <------------------------->

 class


     class Book{
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;
    $book1->title = "gaadgag";
    $book1->author = "JK ROwling";
    $book1->pages = "400"; 

    $book2 = new Book;
    $book2->title = "gaadgdhdhfdag";
    $book2->author = "JK ROwdfhdling";
    $book2->pages = "500"; 


    echo $book2->author;
     

     <--------------------------->


     
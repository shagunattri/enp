 <?php
 echo print(print(print(print(123)))), print(4);
 header("Content-Type: application/json");
// Create a PHP data array.
$data = ["response" => "Hello World"];
// json_encode will convert it to a valid JSON string.
echo json_encode($data);


// Error: We cannot send any output before the headers
echo "Hello";
// All headers must be sent before ANY PHP output
header("Content-Type: text/plain");
echo "World";




 ?>


 <?= "Hello World" ?>




 <?php

 $var = 'foo';
 $foo ='bar';
 
 
 echo $foo;
 echo ${$var};
 echo $$var;



 $varname = 'foo';
 $$varname = 'bar';

 echo $foo;
 echo ${$varname};
 echo $$varname;

 function add($a,$b){ 
 return $a +$b;
 }

 $funcName = 'add';
 echo $funcName(1,2);


 //object of empty class and enter values and use parameters to get the value echoed out
  $foo = new stdclass();
 $foo->bar = "baz";

 echo $foo->bar;


 $que = (object) ["foo" =>"bar"];
 echo $que->foo;


?>
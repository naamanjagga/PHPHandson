<?php 

echo "Hello World";  //Insert the missing part of the code below to output "Hello World".
?>


<?php

echo "This is PHP";   //Write the correct opening tag and close tag for PHP scripts.


//This is a single-line comment  //comment in php


/* This is a
multi-line
comment*/     //multi-line comment
echo "<br>";
echo "Hello World";  //Statements in PHP have to end with a special character



$txt = "Hello";  //Create a variable named txt and assign the value "Hello".

echo "<br>";
$x = 5;
$y = 7;
echo $x + $y;   //Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y.

echo "<br>";
echo strlen("Hello World!"); //Get the length of the string "Hello World!".

echo "<br>";
echo strrev("Hello World!");  //Reverse the string "Hello World!".

echo "<br>";
$oldtxt = "Hello World!";
$newtxt = str_replace("World", "Dolly", $oldtxt);  //Replace the word "World" with the word "Dolly".

echo "<br>";
echo 10 * 5;  //Multiply 10 with 5, and output the result.

echo "<br>";
echo 10 / 2;  //Divide 10 by 2, and output the result.

echo "<br>";
var_dump($a == $b);  //Use the correct comparison operator to check if $a is equal to $b.

echo "<br>";
var_dump($a <> $b); //Use the correct comparison operator to check if $a is NOT equal to $b.

echo "<br>";
$a = 50;
$b = 10;
if($a != $b) { 
    echo "Hello World";
}                       //Output "Hello World" if $a is NOT equal to $b

echo "<br>";
$a = 50;
$b = 10;
if($a == $b) {
  echo "Yes";
} else
 {
  echo "No";
}                //Output "Yes" if $a is equal to $b, otherwise output "No".

echo "<br>";
$a = 50;
$b = 10;
if ($a == $b) {
  echo "1";
} elseif
 ($a > $b) {
  echo "2";
} else
 {
  echo "3";
}                  //Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3".

echo "<br>";
switch ($color) {
  
case "red":
    echo "Hello";
    break;
  
case "green":
    echo "Welcome";
    break;
}                   //Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green".


?>

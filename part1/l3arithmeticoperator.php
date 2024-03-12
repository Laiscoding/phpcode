<?php
// 	Arithmetic Operator
// +-*/%

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawlaimyaing";
$car = false;
$myarrs = ["Aung Aung",'Kyaw Kyaw'];
$colors = array("red",'green',"blue");

echo $num1
echo $num2
echo $num1-$num2
echo $num2-$num1
echo $num1*$num2
echo $num2/$num1
echo $num2%$num1

echo $myarrs; //error  Array to string conversion
print $myarrs; //error  Array to string conversion

var_dump($num1); 
var_dump($num2);
var_dump($num3);
var_dump($city);
var_dump($car);
var_dump($myarrs);/* array(2) {
						 [0]=>
 						 string(9) "Aung Aung"
 						 [1]=>
  						string(9) "Kyaw Kyaw"
						}*/



$num4 = true;
$num5 = "10";
$num6 = "20";

var_dump($num5,$num6); //string
echo $num6+$num5;	//30
echo $num6-$num5;	//10
echo $num4+$num6;	//21
var_dump($num4+$num5);	//11

// overwrite or override

$num5 = 50;
$num6 = "60";

var_dump($num5,$num6); 			

echo $num5+$num6; //110



?>
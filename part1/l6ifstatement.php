<?php 
// =>If Statement
$x = 10;
$y = 20;

if($x > $y){
    echo "Your condation is yes";
}

if($x < $y){
    echo "Ypur condation is  yes"
}

// if else
if($x > $y){
    echo "Yes, x greater than y";
}else{
    echo "No , x less than y";
}

// =>Short Hand
if ($x < $y) echo "Yes, x less than y"; else "No, x greater than y";

$color = "red";
$colorvalue = $color //Assign by refrence

// echo $color;
// echo $colorvalue;

if($colorvalue === "red"){
    echo "My Fav color is red";
}else{
    echo "I hate red color";
} 

if($colorvalue === "red"){
    echo "My Fav color is $color";
}else{
    echo "I hate red color";
} 

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b < $c){
    echo "It is true";
}else{
    echo "It is false"
}


if($a < $b && $b > $c){
    echo "It is true";
}else{
    echo "It is false";
}

if($a < $b && $b > $c){
    echo "It is true";
}else{
    echo "It is false";
}

if($a < $b || $b > $c){
    echo "It is true";
}else{
    echo "It is false";
}
// true      

if($a < $b || $b > $c && $a > $c){
    echo "It is true";
}else{
    echo "It is false";
}

if(($a < $b || $b > $c )&& $a > $c){
    echo "It is true";
}else{
    echo "It is false";
}

if(!($a < $b)){
    echo "It is true";
}else{
    echo "It is Flase";
}

// => if() elseif() else
if($b > $c){
    echo "It is true";
}elseif($b === 200){
    echo "It is equal";
}else{
    echo "It is false";
}

if($b > $c) echo "It is true"; elseif($b === 200) echo "It is equal"; else echo "It is false";


if($b > $c)
    echo "It is true";
elseif($b === 200)
    echo "It is equal"
else 
    echo "It is false";


// switch(condation){
//     case stmt1:
//         code to be executed;
//         break;
//     case stmt2:
//         code to be executed;
//         break;
//     default:
//         code to be executed;
//         break;
// }
$phone = "iphone";

switch($phone){
    case "sony":
        echo "i can't buy sony phone";
        break;
    case "iphone":
        echo "i hate apple products";
        break;
    case "mi":
        echo "I can buy ";
    default:
        echo "I love keypad";
}

?>
<?php

// =>Check Variable Type 

// is_string(variable) function

$val1 = "save Myanmr";
echo "val1 is ". is_string($val1);  //1

$val2 = 0;
echo "val1 is ". is_string($val2);

$val3 = 50;
echo "val1 is ". is_string($val3);


$val4 = "50";
echo "val1 is ". is_string($val4); //1

$val5 = true;
echo "val1 is ". is_string($val5);

$val6 = "";
echo "val1 is ". is_string($val6); //1


// => is_numeric(varible) function 

$val7 = 50;
echo "val7 is ".is_numeric($val7); //1
echo "val7 is ".is_int($val7); //1
echo "val7 is ".is_integer($val7); //1
echo gettype($val7);


$val8 = "50";
echo "val8 is ".is_numeric($val8); //1
echo "val8 is ".is_int($val8);
echo "val8 is ".is_integer($val8);


$val9 = 34.65;
echo "val9 is ".is_numeric($val9); //1
// *****************************
echo "val9 is ".is_int($val9);
echo "val9 is ".is_integer($val9);
echo gettype($val9);

// =>is_float(variable); function 

$val9 = 40;
echo "val9 is ".is_float($val9);


$val10 = 34.56;
echo "val10 is ".is_float($val10); //1

$val11 = "50.67";
echo "val11 is ".is_float($val11);

// is_bool(variable) function 

$val12 = true;
echo "val12 is ".is_bool($val12); //1

$val13 = FALSE;
echo "val13 is ".is_bool($val13); //1


$val14 = 1;
echo "val14 is ".is_bool($val14); 


$val15 = "true";
echo "val15 is ".is_bool($val15); 

// =>is_array(varible) function 

$val16 = "aung aung";
echo "val16 is ".is_array($val16);

// $val17 = ["aung aung","su su"];
$val17 = array("aung aung","su su");
echo "val17 is ".is_array($val17); //1

// =>is_null(variable) function 

$val18 = 0;
echo "val18 is ".is_null($val18);

$val19 = null;
echo "val19 is ".is_null($val19); //1

$val19 = Null;
echo "val19 is ".is_null($val19);

$val20 = NULL;
echo "val20 is ".is_null($val20); //1

$val21 = "null";
echo "val21 is ".is_null($val21);


// =>empty(variable) Vs isset(variable) fnction 
// Note :: following value are empty
// 0
// 0.0
// "0"
// ""
// NULL
// FALSE
// []

$val21 = [];

if(empty($val21)){
    echo "your variable is empty";
}

if(isset($val21)){
    echo "Your variable with value";
}else{
    echo "Your variable without";
}


// isset vs unset 

//  $city;

$city = "Yangon";
$country = "Thailand";\
echo isset($city) ? "Yes" : "No" ;
echo $city;
echo $country;
    



?>
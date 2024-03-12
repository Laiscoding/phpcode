<?php

// =>Php looping

// for
// foreach
// while 
// dowhile

$colorsones =["red","green","blue","white","black","gray","pink"];
echo count($colorsones);
var_dump($colorsones);

$colorsoneskeys = array_keys($colorsones);
// echo($colorsoneskeys); //error
var_dump($colorsoneskeys);

for($i = 0; $i < count($colorsones); $i++){
    // echo $i; //0to6
    echo "This is index array or manual array by forloop = index key is ". $i."value is = ". $colorsones[$i] ."<br/>";

    // echo "This is index array or manual array by forloop = index key is ". $colorsoneskeys[$i]."value is = ".$colorsones[$i] ."<br/>";
}



foreach($colorsones as $colorsone){
    echo "This is indexed array or manual array by foreach = ".$colorsone;
}

foreach($colorsones as $key=>$colorsone){
    // echo $key;
    echo "This is indexed array or manual array by foreach = inde key is = ".$key."and value is =".$colorsone;
}


$x = 0;

while($x < count($colorsones)){ //need to fix error
    // echo $colorsones[$x];
    // $x++;

    echo "This is indexed array or manual array by foreach = inde key is = ".$colorsoneskeys[$x]."and value is =".$colorsones[$x];
    $x++;
}

$y=0;
//need to fix error
do{
    echo "This is indexed array or manual array by foreach = inde key is = ".$colorsoneskeys[$y]."and value is =".$colorsones[$y];
    $x++;
}while($y < count($colorsones));


?>
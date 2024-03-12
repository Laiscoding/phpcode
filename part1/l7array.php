<?php
// (i)Indexed Array(Manual Array)
// (ii)Associative array
// (iii)Multidimensional Array (array that contains one or more arrays)

// (i)Indexed Array(Manual Array)

$names = array("aung aung","kyaw kyaw","maung maung","zaw zaw","tun tun");
echo $names; //error
print $names; //error

echo count($names);
var_dump($names);
print_r($names,false);


$colors = array("red","green","blue","black","white");
// echo $colors;

echo count($count);
print_r($colors,false);
echo "<pre>".print_r($colors,false)."</pre>";


$colors = array("red","green","blue","black","white","pink");
// echo $colors;

echo count($colors);//6
print_r($colors,false);
echo "<pre>".print_r($colors,false)."</pre>";

$colors[6] = "gray";
$colors[7] = "skyblue";
$colors[8] = "milk";
$colors[0] = "violet";

echo "<pre>".print_r($colors,"true")."</pre>";
echo count($colors);//9
echo "My fav color is ".$colors[7];

// (ii)Associative array

$news = array("pone"=>"this is podt one","ptwo"=>"this is post two","pthree"=>"this is postthree");
echo count($news);
var_dump($news);

$medias = [
    "pone"=>"this is podt one",
    "ptwo"=>"this is post two",
    "pthree"=>"this is postthree"
];
echo count($medias);
var_dump($medias);

$medias["pfour"] = "this is post four";
$medias["pthree"] = "this is new post three";

echo count($medias);
var_dump($medias);
echo "I like this post. post title is ".$medias["ptwo"];

// (iii)Multidimensional Array (array that contains one or more arrays)

$paints = array(
    array("red","green","blue"),
    array("pen","pencil","ruler"),
    array("paper","plastic",)
);

echo count($paints);
var_dump($paints);

$maincolors = [
    ["red","green","blue"],
    ["pen","pencil","ruler"],
    ["paper","plastic"]
];

echo count($maincolors); //3
var_dump($maincolors);

echo $maincolors[0][0]; //red
echo $maincolors[1][2]; //ruler
echo $maincolors[2][1]; //plastic

$persons = array(
    array("name"=>"aung aung","age"=>"20"),
    array("name"=>"su su","age"=>"18"),
    array("name"=>"nu nu","age"=>"23")
); 

$vippersons = [
    ["name"=>"aung aung","age"=>"20"],
    ["name"=>"su su","age"=>"18"],
    ["name"=>"nu nu","age"=>"23"]
];

echo count($vippersons);
var_dump($vippersons);

$vippersons[0]["name"];
$vippersons[0]["age"];

$vippersons[2]["name"];
$vippersons[1]["age"];


?>
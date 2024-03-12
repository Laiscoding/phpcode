<?php 

// 1 JAn 1970 UTC
date_default_timezone_set("Asia/Yangon");
$getdate = getdate();
//echo $getdate
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds =".$getdate["seconds"];
echo "This is minutes =".$getdate["minutes"];
echo "This is hours =".$getdate["hours"];
echo "This is wdays =".$getdate["wdays"];

echo "This is weekdays =".$getdate["weekdays"];//Tueday
echo "This is ydays =".$getdate["ydays"];//64 day ofthe years

echo "This is month =".$getdate["month"];//March
echo "This is mon =".$getdate["mon"]; //3 //Day of month
echo "This is mday =".$getdate["mday"]; //5

echo "This is year =".$getdate["year"]; //2024

echo "This is 0 =".$getdate["0"]; //



$time = time();
echo "This is 0 =".$time; //

// DATE/TIME Format
//date(format,timestampe)

$date = date("a",$time);
echo "THis is fomart a = ".$date; //am apm

$date = date("A",$time);
echo "THis is fomart a = ".$date; //AM PM

$date = date("d",$time);
echo "This is format d = ".$date; //05 day leading 0

$date$date = date("D",$time); 
echo "THis is fomart D = ".$date; //Tue Sun Mon

$date = date("F",$time);
echo "THis is fomart F = ".$date; //March

$date = date("g",$time);
echo "This is format g = ".$date; //10 //hours no leading 0 12hrs

$date$date = date("G",$time); 
echo "THis is fomart G = ".$date; //22 //hours no leading 0 24hr

$date = date("h",$time);
echo "This is format h = ".$date; //10 hous leading 0 12hrs

$date$date = date("H",$time); 
echo "THis is fomart H = ".$date; //22 hours leading 0 24hr

$date = date("i",$time);
echo "This is format i = ".$date; //01 //minute


$date = date("j",$time);
echo "This is format j = ".$date;//5  //day of month no leading 0

$date = date("l",$time);
echo "This is format l = ".$date; //Tueday

$date = date("L",$time);
echo "This is format L = ".$date; //1   //leap Year (1 = true ,0 = false)

$date = date("m",$time);
echo "This is format m = ".$date;//03 //day of month  leading 0

$date = date("M",$time);
echo "This is format M = ".$date;//Mar //(Jan/Feb)

$date = date("r",$time);
echo "This is format r = ".$date;// Tue,05 Mar 2024 23:10;53 +0630

$date = date("n",$time);
echo "This is format n = ".$date;//3  //day of month no leading 0

$date = date("s",$time);
echo "This is format s = ".$date;//second

$date = date("U",$time);
echo "This is format U = ".$date; //


$date = date("y",$time);
echo "This is format y = ".$date; //

$date = date("Y",$time);
echo "This is format Y = ".$date; //

$date = date("U",$time);
echo "This is format U = ".$date; //











// timezonelink
// https://www.php.net/manual/en/timezones.asia.php
















?>
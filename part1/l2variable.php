<?php

$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname; 
print $job;

echo "$fullname";  //U kyaw KYaw
print '$job'; //$job

echo "My name is $fullname";
echo "My name is '$fullname'";
echo "My name is ${fullname}";
echo "My name is {$fullname}";

echo `My name is ${fullname}`; //error  My name is $fullname
echo `My name is {$fullname}`; //error  My name is $fullname

echo "He's my father, he is a $job";//He's my father, He is a Developer 
echo "He/'s my father, he is a \$job";  // He's my father, He is a $job 
echo "He's my father, he is a {$job}";  //He's my father, He is a Developer 
echo "He's my father, he is a {\$job}"; //He's my father, He is a {$job} 
echo "He's my father, he is a \{$job}"; //He's my father, He is a \{Developer} 
echo "He's my father, he is a \${job}"; //He's my father, He is a {$job} 

$gender = echo "Female"; //error

$mation = print "burma"; //burma

// Concat(.)

$firstname = "Aung";
$lastname = "Kyaw Kaw";

echo $firstname;
echo $lastname;

echo $firstname." ".$lastname;

// Comments 

#single line comments

/* multiline comments
line1
line2
line3 */ 


?>
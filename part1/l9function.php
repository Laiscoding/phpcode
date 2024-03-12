<?php
    //User Defined Function

    //function name(){
        // code to be excuted;
    // }


    // ---------------------------------

    //Parameter Function (or) Arguments Function
    // (i)Sngle 
    //(ii) Multi

    //function name($arg1){
        // code to be excuted;
    // }


    //function name(arg1,arg2){
        // code to be exuted;
    // }


    //---------------------------

    //Default Parameter (or) Default Argument Function

    //function name($nme="aung aung",$age=""20){
        // code to be excuted;
    // }



    function myfun(){
        $num1 = 10;
        $num2 = 20;
        $calc = $num1+$num2;
        echo $calc;
    }

    myfun();//30

    //---------------------------

    function singlefun($name){
        echo "My name is $name";
    }
   
    singlefun("aung aung");
    singlefun("su su");

    //----------------------------

    function multifun($name,$age){
        echo "My name is $name and i am {$age} years old";  
    }

    multifun("kyaw kyaw",20);
    multifun("nandar",30);

    //----------------------------

    function defaultfun($name="hla hla"){
        echo "My name is ${name}";
    }
    deafultfun();//My name is hla hla
    defaultfun("aye aye");//My naem is aye aye

    function defaultfun($num1=10,$num2=20,$num3=30){
        $calc = $num1+$num2+$num3;
        echo $calc;
    }

    defaultfun(); //60
    defaultfun(50,10); //90
    defaultfun(70,5,15); //90

    //-----------------------------------------------------------

    //Return

    function myretrunfun($num1){
        $calc = $num1+10;
        return $calc;
    }

    echo myretrunfun(50); //60

    function myretrunfun1($num1){
        return $calc = $num1+10;;
    }

    echo myretrunfun1(100); //110


    function myreturnfun2($num1,$num2,$num3){
        $calc = $num1+$num2+$num3;
        retyrn $calc;
    }

    echo myreturnfun2(10,20,30);

    function myreturnfun3($num1=10,$num2=20,$num3=30){
        $calc = $num1+$num2+$num3;
        return $calc;
    }

    echo myreturnfun3(50); //100
    echo myreturnfun3(); //60

    //=> Dynamic Function Call

    $dyn1 = myreturnfun(100);
    echo $dyn1; //110

    $dyn2 = myreturnfun3();
    echo $dyn2; //60
    
    $dyn3 = "myreturnfun1";
    echo $dyn3; //myreturnfun1
    echo $dyn3(100); //110


    $myfun = "myreturnfun3";
    echo $myfun;

    if(function_exists($myfun)){
        echo "Yes,your variable value is already in some kind of function";

    }else{
        echo "No";
    }


    //--------------------------------

    

?>
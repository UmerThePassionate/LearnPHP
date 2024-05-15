<?php

// Functions

// syntax

// functionName(){
    // statements
// }

// to call function

// functionName();

// example 

// function hello(){
//     echo "This is Hello function<br>";
// }

// function world() {
//     echo "This is World function<br>";  
// }

// hello();
// world();
// hello();
// world();
// hello();



// Functions with Parameters

// syntax

// functionName(parameter1,parameter2){
    // statements
// }

// to call function

// functionName(value1,value2); 

// example 1

// function hellow($fname = "First",$lname = "Last"){
//     echo "Hello $fname $lname<br>"; 
// }

// hellow();
// hellow("World","hooo");
// hellow("Bill","Gates");

// example 2

// function sum($a,$b){
//     echo $a + $b . "<br>";
// }

// $one = 20;
// $two = 30;

// sum($one,$two);
// sum(10,20);


// Functions with Returning Value

// syntax

// functionName(parameter1,parameter2){ 
    // statements
    // return value;
// }    

// to call function

//$a = functionName(value1,value2);

// example


// function hellow($fname = "First",$lname = "Last"){
//     $v =  "$fname $lname<br>"; 
//     return $v;
// }



// $name = hellow("Bill","Gates");

// echo "Hello $name";

// example

// function sum($math,$eng,$sce){
//     $s = $math + $eng + $sce;
//     return $s;

// }

// function percentage($st){

//     $per = $st / 3;
//     echo $per;  
// }

// $total = sum(55,65,88); 
// percentage($total);
// echo $total;


//  Function Argument By Reference


// example

// function first($num1){
//      $num1 += 5;
// }    

// function second(&$num){
//      $num += 10;
// }

// $number = 10;

// first($number);

// second($number);
// echo "Orginal vale is :$number";





?>
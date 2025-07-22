<?php

// A function in PHP is a reusable block of code that performs a specific task. Functions help keep your code organized, modular, and easy to maintain.

echo "Basic function explaination: <br>";
/*
function heading(){
    echo "<h4>User Details</h4>";
}

function Userdetails(){
    heading();
    echo "User Name: Shubham Nagoriya <br>";
    echo "User Age: 24 Years <br>";
    echo "User Email: shubhamz@gmail.com <br>";
    echo "User Profile: Web Developer";
    echo "<hr/>";
}

Userdetails();
*/

echo "Parameterized function explaination: <br>";
/*
function multiplay($num1,$num2){
    echo $num1*$num2;
    echo "<br>";
}

multiplay(30,34);

function userdata($name,$age){
    echo "User name: $name <br>";
    echo "User age: $age <br>";
}

userdata("Shubham",24);
*/

echo "Function with return statement explaination: <br>";
/*
function username(){
    return "Shubham Nagoriya";
}

echo "<h2> Current User is ". username(). "</h2>";
echo "<h3> Welcome, Mr. ". username()."</h3>";
*/

echo "Function with default parameters explaination: <br>";
/*
function bike($bikename,$bikecolor="Carbon blue"){
    echo "This bike is a $bikename and it's color is $bikecolor";
}

bike("Honda Sp 125",);


function object($objectname,$objectsize, $objectcolor){
    echo "<h2 style='font-size:$objectsize; color:$objectcolor'>$objectname</h2>";
}

object("Shubham Nagoriya", "34", "red");
*/
echo "<hr>";
echo "Nested function explaination: <br>";
/*
function dummy(){
    echo "Dummy function is called here <br>";

    function subdummy(){
        echo "Subdummy function is called now <br>";
    }
}

dummy();
subdummy();
*/

echo "<hr>";
echo "Variable function explaination: <br>";
/*
function test(){
    echo "Test function is called";
}

$a="test";

function main($a){
    $a();
}

main($a);
*/

echo "<hr>";
echo "Basic and important function explaination: <br>";

// count character count in string data type
$userdata="Shubham Nagoriya";
echo strlen($userdata);
echo "<br>";

// identify data type of variable
$data=false;
var_dump($data);
echo "<br>";

// Print date in PHP
echo date("d M y");
echo "<br>";

// Php info page details
// echo phpinfo();

// Check if data is string data or not
$name="Shubham Nagoriya";
echo is_string($name);
echo "<br>";
echo is_int($name);
echo "<br>";

// generate random numbers
echo rand();
echo "<br>";

// Add die tag to stop print further code
echo "This is a before code <br>";
// die; or 
// exit;
echo "This is a after code <br>";

// show some part of the string
$user="My Name is Shubham Nagoriya";
echo substr($user,8);


?>
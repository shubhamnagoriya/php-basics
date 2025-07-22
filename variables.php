<?php

// Varibale is sbstracted storage location, it can store any type of data like number, characters, symbols.

/*
echo "Hello World"; echo "<br>";

$name= "Shubham Nagoriya";

Echo $name; echo "<br>";
Echo $name; echo "<br>";

$num=20;
echo $num*10; echo "<br>";
echo $num*23; echo "<br>";
echo $num*12; echo "<br>";
echo $num*6; echo "<br>";
echo $num*4; echo "<br>";
echo $num*9; echo "<br>";
*/

// Rules in php to declare the variables
// Variable always starts with "$"
// Variable name always starts with letter or underscore "_" not with number or special characters
// variable name are case sensetive like $name, $Name and $NAME are act like different varibale


//-----------------------------------------------------------------------

// Global and Local Variables
// Global variable is declared outside of any function and can be accessed from anywhere in the script.
// Local variable is declared inside a function and can only be accessed within that function.

// Global and Local variable examples
$globalVar="I'm a global variable";

function getvarname(){
    // $localvar="I'm a local variable";
    global $globalVar; // Accessing the global variable inside the function
    // echo $localvar;
    echo $globalVar."<br>";
}


getvarname()."<br>";
echo $globalVar."<br>";



// nested functions

$username="Shubham Nagoriya is global variable";

function mainfunction(){
    $username="Shubham Nagoriya main function variable";
    echo $username."<br>";

    function subfunction(){
        $username="Wordpress developer is a sub function variable";
        //global $username;
        echo $username."<br>";
    }
}

echo $username."<br>";
mainfunction();
subfunction();

echo "<br><br>";


// Super globals in PHP
// Super globals are built-in variables in PHP that are always accessible, regardless of scope. They include:

// $GLOBALS Super global variable that contains all global variables in the script.
$a="Peter Parker";
$b=24;
echo "<pre>";
// print_r($GLOBALS); // Displays all global variables
// print_r($_SERVER); // Displays server and execution environment information
// print_r($_REQUEST); // Displays data from both $_GET and $_POST
// print_r($_POST); // Displays data sent via HTTP POST method
// print_r($_GET); // Displays data sent via HTTP GET method
// print_r($_FILES); // Displays file upload information
// print_r($_COOKIE); // Displays cookie data
// print_r($_SESSION); // Displays session data
// print_r($_ENV); // Displays environment variables
echo "</pre>";

// $_FILES Super global


?>
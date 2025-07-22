<?php

// Array is colletion of multiple different data types
// Types of arrays
// 1. Indexed Array: Simple form of array
// 2. Associative Array: Array with key-value pairs
// 3. Multidimensional Array: Array of arrays or nested arrays

// Indexed Array
// Example of Indexed Array

$users = array("John", "Jane", "Doe");
$users = ["John", "Jane", "Doe","Peter","Sam","Bruce"];
echo $users[0]."<br>";
echo $users[1]."<br>";
echo $users[2]."<br>";
echo $users[3]."<br>";

for($user=0; $user<count($users); $user++){
    echo "<h2 style='color:blue'>".$users[$user]."<br>"."</h2>";
}


// Associative Array
/*
$userdata=[
    "Name" => "Shubham Nagoriya",
    "Age" => 24,
    "Email" => "shubham@example.com",
    "City" => "Indore",
    "State" => "Madhya Pradesh",
];

foreach($userdata as $key => $value){
    echo "<h2 style='color:blue'>".$key." : ".$value."</h2>";
}

foreach($userdata as $key => $value):
    echo $key." is ".$value. "<br>";
endforeach;
*/

// Multidimensional Array
$userdetails =[
    [1,"Shubham", 24, "shubham@gmail.com"],
    [2,"John Doe", 30, "john@gmail.com"],
    [3,"Jane Smith", 28, "jane@gmail.com"],
    [4,"Peter Parker", 22, "peter@gmail.com"],
    [5,"Bruce Wayne", 35, "bruce@gmail.com"],
];

for($user=0; $user<count($userdetails); $user++){
    for($detail=0; $detail<count($userdetails[$user]); $detail++){
        echo $userdetails[$user][$detail]."<br>";
    }
}


?>
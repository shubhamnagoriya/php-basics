<?php

$users=["John", "Jane", "Doe", "Alice", "Bob", "Charlie", "John", "Bob"];
$userdetails=[
    "name" => "John",
    "age" => 30,
    "email" => "john@gmailc.om",
    "City" => "London"
];
print_r($users);

echo "<br><br>";
echo count($users);

echo "<br><br>";
unset($users[2]); // Remove "Doe"
print_r($users);

echo "<br><br>";
array_push($users, "Shubham", "Rashmay");
print_r($users);

echo "<br><br>";
array_pop($users); // Remove last element
print_r($users);

echo "<br><br>";
print_r(array_keys($userdetails)); // Get keys of the array

echo "<br><br>";
echo implode($users); // Convert array to string

echo "<br><br>";
$example="Hello Shubham how are you doing today?";
print_r(explode(" ", $example)); // Convert string to array

echo "<br><br>";
$both=array_merge($users, $userdetails); // Merge two arrays
print_r($both);

echo "<br><br>";
$unique=array_unique($users); // Remove duplicate values
print_r($unique);






?>
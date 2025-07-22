<?php

$userdetails=[
    "name" => "John Doe",
    "age" => 30,
    "email" => "shubham@gmail.com",
    "City" => "Indore, India",
];
//print_r($userdetails)."<br>";
//echo "<br><br>";
// $userdetailsjson=json_encode($userdetails);
// echo $userdetailsjson;


$data='{"name":"John Doe","age":30,"email":"shubham@gmail.com","City":"Indore, India"}';
$dataArray = json_decode($data, true);
print_r($dataArray);

?>
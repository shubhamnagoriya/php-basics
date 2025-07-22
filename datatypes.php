<?php
/*
There are 8 types of data in PHP
1. String: Store all type of alphabatic values Small, capital, Capitalize
2. Integer: Store numbers
3. Float: Store number and value with decimals
4. Boolean: Only store "true" or "false"
5. Null: Empty data or not define data yet
6. Array: Colletion of multiple data types is array
7. Object (Class):
8. Resource: External database connetions
*/

// Example of String data
$name="Shubham Nagoriya is Smart Guy";
echo $name;
echo "<br>";
echo var_dump($name);
echo "<br><br>";

// Example of Integers data type
$number=200;
echo $number;
echo "<br>";
echo var_dump($number);
echo "<br><br>";

// Example of Float data type
$dnumber=321.5643;
echo $dnumber;
echo "<br>";
echo var_dump($dnumber);
echo "<br><br>";

// Example of Boolean data type
$bool=True;
echo $bool;
echo "<br>";
echo var_dump($bool);
echo "<br><br>";

// Example of Null data type
$empty=null;
echo $empty;
echo "<br>";
echo var_dump($empty);
echo "<br><br>";

// Example of Array data type
$array= ['Shubham','Rashmay', 'Nayan', 42];
print_r($array);
echo "<br>";
echo var_dump($array);
echo "<br><br>";


// Example of Object(Class) data type
// User = New class();


// Example of Resources data type
/* $connection = ftp_connect("127.0.0.1");
print_r($connection);
echo "<br>";
echo var_dump($connection);
echo "<br><br>"; */

?>
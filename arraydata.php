
<?php

// Multidimensional Array
// Example of Multidimensional Array
// Multidimensional Array is an array of arrays or nested arrays
// It can be used to store complex data structures like user details, products, etc.

// $userdetails =[
//     [1,"Shubham", 24, "shubham@gmail.com"],
//     [2,"John Doe", 30, "john@gmail.com"],
//     [3,"Jane Smith", 28, "jane@gmail.com"],
//     [4,"Peter Parker", 22, "peter@gmail.com"],
//     [5,"Bruce Wayne", 35, "bruce@gmail.com"],
// ];

// echo "<table border='1'>";
// for($user=0; $user<count($userdetails); $user++){
//     echo "<tr>";
//     for($detail=0; $detail<count($userdetails[$user]); $detail++){
//         echo "<td>".$userdetails[$user][$detail]."</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
/*
$userdata=[
    [1, "Shubham", "Developer", 24, "shubham@gmail.com"],
    [2, "Rashmay", "Developer", 25, "rashmay@gmail.com"],
    [3, "Kunal", "Marketer", 23, "kunal@gmail.com"],
    [4, "Nayan", "Designer", 26, "nayan@gmail.com"],
    [5, "Akshita", "Manager", 24, "akshita@gmail.com"],
];

echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
for($member=0; $member<count($userdata); $member++){
    echo "<tr>";
    for($user=0; $user<count($userdata[$member]); $user++){
        echo "<td>";
        echo $userdata[$member][$user]."<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
*/

// Multidimensional associative array
$userinfo=[
    [
        "Name"=> "Shubham",
        "Profile"=> "Developer",
        "Age"=> 24,
        "Email"=> "shubham@gmail.com",
    ],
    [
        "Name"=> "Rashmay",
        "Profile"=> "Developer",
        "Age"=> 25,
        "Email"=> "rashmay@gmail.com",
    ],
    [
        "Name"=> "Kunal",
        "Profile"=> "Marketer",
        "Age"=> 23,
        "Email"=> "kunal@gmail.com",
    ],
    [
        "Name"=> "Nayan",
        "Profile"=> "Designer",
        "Age"=> 26,
        "Email"=> "nayan@gmail.com",
    ],
    [
        "Name"=> "Akshita",
        "Profile"=> "Manager",
        "Age"=> 24,
        "Email"=> "akshita@gmail.com",
    ],
];

// Adding a new user to the array
array_push($userinfo, [
    "Name"=> "Peter",
    "Profile"=> "Tester",
    "Age"=> 27,
    "Email"=> "peter@gmailc.com" ],);

// removing a user from the array
array_splice($userinfo, -1);

echo "<table border='1'>";
foreach($userinfo as $user){
    echo "<tr>";
    foreach($user as $key => $value){
        echo "<td>";
        echo $key.": ".$value."<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
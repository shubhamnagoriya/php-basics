<?php

// Loop is a control structure that allows you to repeat a block of code multiple times as long as a specified condition is true.
// Types of Loops in PHP
// For Loop: Used when you know exactly how many times to loop
// While Loop: Executes a block of code as long as the condition is true.
// Do While Loop: Same as while, but executes at least once, even if the condition is false.
// ForEach Loop: Used specifically to loop through arrays.


// For Loop Explaination
// for($serial=1;$serial<=55;$serial++){
//     echo " $serial My Name is Shubham Nagoriya <br>";
// }

// Break statement in Loop
// $user_needed=9;
// for($user=1;$user<=20;$user++){
//     echo "$user Shubham Nagoriya <br>";
//     if($user==$user_needed){
//         break;
//     }
// }

// Continue statement in Loop
// for($item=1;$item<=9;$item++){
//     if($item==3 or $item==5 or $item==7){
//         continue;
//     }
//     echo "$item number is Searial number <br>";
// }

// A nested loop is a loop inside another loop.
// for($n=1;$n<=5;$n++){
//     for($m=1;$m<=3;$m++){
//         echo "$n for $m <br>";
//     }
// }

// While Loop Explaination
// $item=0;
// while($item<10){
//     $item++;
//     echo "$item times <br>";
// }

// $itemx=10;
// while($itemx>0){
//     $itemx--;
//     echo "$itemx decreasing to <br>";
// }

// Do While Loop Explaination 
// $dwl=10;
// do{
//     echo "Current loop value is $dwl <br>";
//     $dwl--;
// } while($dwl>=0);


// ForEach Loop Explaination
$users = ["John", "Jane", "Doe", "Peter", "Sam", "Bruce", "Alice", "Bob", "Charlie"];

foreach($users as $user){
    echo "<p style='color:red; line-height:5px;'>".$user."<br>"."</p>";
    if($user=="Peter"){
        continue;
    }
}
?>
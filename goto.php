<?php
// The goto statement in PHP is a control flow instruction that jumps to another part of the code, identified by a user-defined label.


$num=20;
echo "Before Condition <br>";

if($num==20){
    goto game;
}

$example="Shubham Nagoriya <br>";
echo $example;

game:
echo "Statement is jumped to the game <br>";

$item=0;
while($item<10){
    echo "$item is current value <br>";
    $item++;
    
    if($item==6){
        goto nextcode;
    }

}

$example="Shubham Nagoriya <br>";
echo $example;

nextcode:
echo "The statement is jumped to Nextcode "

?>
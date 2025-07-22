<?php

//print_r($_POST);
if(isset($_POST['name'])){
    echo "User name: ".$_POST['name'] . "<br>";
    echo "User email: ".$_POST['email'] . "<br>";
    echo "User skills: ". implode(", ", $_POST['skills']) . "<br>";
    echo "User gender: ". $_POST['gender'] . "<br>";
    echo "User country: ". $_POST['country'] . "<br>";
    echo "User message: ".$_POST['message'] . "<br>";
}

?>
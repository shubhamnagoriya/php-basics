<?php

$path = "files";
$files = scandir($path);
$files = array_diff($files, array('.', '..')); // Remove '.' and '..' from the list
//print_r($files);
foreach($files as $file){
    echo "<a href=./files/$file>$file</a>" ."<br>";
}

?>
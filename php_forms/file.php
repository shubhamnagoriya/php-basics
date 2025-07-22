<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if($_FILES['file_upload']){
    $path=$_FILES['file_upload']['name'];
    $upload_path="uploads/".$path;
    // echo $upload_path."<br>";
    if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_path)){
        echo "File uploaded successfully to: ".$upload_path;
    } else {
        echo "File upload failed.";
    }
 
}

?>
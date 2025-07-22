<?php

// Create a file with the name entered in the input field and write the content of the textarea into that file.

if(isset($_POST['filename'])){
    $file="files/".$_POST['filename'].".txt";
    $content=$_POST['textarea'];
    $file=fopen($file,"w");
    fwrite($file,$content);
    fclose($file);
    echo "File created successfully."."<br><br>";
}

?>

<form action="" method="post">
    <input type="text" name="filename" placeholder="Enter your name">
    <br><br>
    <textarea name="textarea" id=""></textarea>
    <br><br>
    <button>Create file</button>
</form>


<?php

// Read the file created above and display its content.

// $datafile="php_forms/userdata.txt";
// $readdata=fopen($datafile,"r") or die("File not found");
// echo fread($readdata,filesize($datafile));
// fclose($readdata);


if(isset($_FILES['fileupload'])){
    $datafile= $_FILES['fileupload']['tmp_name'];
    $readdata=fopen($datafile,"r") or die("File not found");
    echo fread($readdata,filesize($datafile));
    fclose($readdata);
}

?>
<br><br>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileupload">
    <br><br>
    <button>Upload File</button>
</form>
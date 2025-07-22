<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function on button</title>
</head>
<body>
    <form action="" method="post">
       <button name="button">CLick Now</button> 
    </form>
</body>
</html>

<?php

if(isset($_POST['button'])){
    btn_click();

}
function btn_click(){
    echo "Button clicked!";
}
?>
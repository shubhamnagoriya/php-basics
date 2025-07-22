<?php

setcookie("username", "Shubham Nagoriya", time()+(86400), "/");
setcookie("userprofile", "WordPress Developer", time()+(86400), "/");


if(isset($_COOKIE['username'])){
    echo "Cookie 'username' is set!<br>";
    echo "Value: " . $_COOKIE['username'] . "<br>";
} else {
    echo "Cookie 'username' is not set!<br>";
}

echo "<br>";

if(isset($_COOKIE['userprofile'])){
    echo "Cookie 'userprofile' is set!<br>";
    echo "Value: " . $_COOKIE['userprofile'] . "<br>";
} else {
    echo "Cookie 'userprofile' is not set!<br>";
}

echo "<br>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>
<br>
Cookies with request method
<br><br>
<form action="" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <br><br>
    <button name="button" value="set">Set Cookies</button>
    <button name="button" value="display">Display Cookies</button>
    <button name="button" value="delete">Delete Cookies</button>

</form>

<?php

if($_POST['button']== "set"){
    $name=$_POST['name'];
    setcookie("name", $name, time()+(86400), "/");
    echo "Setting cookie with name: $name<br>";
}

if($_POST['button']== "display"){
    if(isset($_COOKIE['name'])){
        echo "Cookie 'name' is set!<br>";
        echo "Value: " . $_COOKIE['name'] . "<br>";
    } else {
        echo "Cookie 'name' is not set!<br>";
    }
}

if($_POST['button']== "delete"){
    setcookie("name", "", time() - 3600, "/");
    echo "Cookie 'name' has been deleted!<br>";
}

?>
<?php

// $_SESSION is a superglobal variable in PHP that is used to store session variables. Session variables are stored on the server and can be used to maintain state across different pages of a web application.

//session_start(); // Start the session
//$_SESSION['username'] = 'JohnDoe'; // Set a session variable

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Data</title>
</head>
<body>
   <form action=""method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <br><br>
    <button name="button" value="set">Set Session</button>
    <button name="button" value="get">Get Session</button>
    <button name="button" value="delete">Delete Session</button>
   </form> 
</body>
</html>

<?php

session_start(); // Start the session
if(isset($_POST['button'])){
    if($_POST['button']=='set'){
        $user=$_POST['username'];
        $_SESSION['username'] = $user; // Set the session variable
    }

    if($_POST['button']=='get'){
        echo $_SESSION['username'];
    }

    if($_POST['button']=='delete'){
        session_destroy();
    }
}

?>
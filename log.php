<?php
session_start();

if(isset($_POST['save']))
{
    extract($_POST);
    include 'config.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where username='$username' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
                        $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;   
        header("Location: welcome.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}

<?php
    
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="login";
    

    $db = mysqli_connect('localhost', 'root', '', 'login');
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    session_start(); 
  
   // Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
        
    
    
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/all.css" rel="stylesheet">
<form action="" method="POST">
    <div class="container">
        <div class="container2">


            <p><b><i class="fa-solid fa-user"></i> Login</b></p>
            <label class="userid"><b>User Id</b></label>
            <input class="plchldr1" type="text" placeholder="    Your Id" name="username" required>

            <label class="password"><b>Password</b></label>
            <input class="plchldr2" type="password" placeholder="    Password" name="password">
            
             <input type="submit" class="button" value="Login">
        </div>
    </div>

</form>



<head>
   <link rel="stylesheet" href="p1logincss.css">
   <style>
       .container {
    background-color: rgb(235, 223, 246);
    position: relative;
    padding: 15%;
    width:20%;
    height:30%;
    border-radius: 20px;
    border: 3px solid;
    border-color: rgb(129, 79, 209);
    margin-left:22%;
    margin-top:12%;
}

.container2 {
    display: block;
    background-color: rgb(247, 241, 234);
    position: absolute;
    width:50%;
    height:70%;
    border-radius: 20px;
    border: 3px solid;
    border-color: rgb(129, 79, 209);
    margin-bottom: -20%;
    margin-top:-20%;
    margin-left:-6%;


}

p{
    position:absolute;
    margin-left:44%;
    text-align: center;
    margin-top:2%;
    margin-left:41%;
    font-size:1.5vw;
}

.userid {
    position: absolute;
    font-size:1.5vw;
    margin-left:30%;
    margin-top:15%;
}

.password {
    position: absolute;
    font-size:1.5vw;
    margin-left:30%;
    margin-top:37%;
    padding: 0%;
}
.plchldr1 {
    position:absolute;
    margin-top: 23%;
    margin-left:30%;
    background-color: rgb(243, 237, 247);
    color: rgb(40, 41, 41);
    height:10%;
    width:35%;
    border-radius: 15px;
    border-color: black;
}

.plchldr2 {
    position: absolute;
    margin-top:45%;
    margin-left:30%;
    background-color: rgb(243, 237, 247);
    color: rgb(0, 0, 0);
    height:10%;
    width:35%;
    border-radius: 15px;
    border-color: black;
}

.button {
    position: absolute;
    margin-left:40%;
    margin-top:60%;
    height:12%;
    border-radius: 15px;
    background-color: rgb(6, 175, 94);
    color: aliceblue;
    font-size:1vw;
}

   </style>
</head>

<body>
</body>

</html>
<?php
require_once "config.php";
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');

if (!empty($username)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "login";


    //create connnection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO users(username,password,email,phone) VALUES('$username','$password','$email','$phone')";

        if ($conn->query($sql)) {
            echo "New record inserted successfully";
            header("location: login.php");
        } else {
            echo "error:" . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/all.css" rel="stylesheet">
<form action="" method="POST">
    <div class="container">
        <div class="container2">
            <div class="content">
                <p><b> <i class="fa-solid fa-user"></i> Register</b></p>
                <label class="userid"><b>Username</b></label>
                <label class="email"><b>Email </b></label>

                <input class="plchldr1" type="text" placeholder="    Your Id" name="username">
                <input class="plchldr2" type="text" placeholder="    Your Email" name="email">

                <label class="password"><b>Password</b></label>
                <label class="phone"><b>Phone</b></label>

                <input class="plchldr3" type="password" placeholder="    Password" name="password">
                <input class="plchldr4" type="text" placeholder="    Phone" name="phone">


                <label class="name"><b>Name of coporate</b></label>
                <label class="address"><b>Address</b></label>


                <button class="button" type="submit" value="submit">Register</button>
            </div>
        </div>
    </div>

</form>

<head>
    <link rel="stylesheet" href="e/work/css/all">
    <link rel="stylesheet" href="p1registercss.css">
    <style>
        .container {
            background-color: rgb(235, 223, 246);
            position: relative;
            padding: 15%;
            width: 40%;
            height: 25%;
            border-radius: 20px;
            border: 3px solid;
            border-color: rgb(129, 79, 209);
            margin-left: 12%;
            margin-top: 10%;


        }

        .container2 {
            background-color: rgb(247, 241, 234);
            position: absolute;
            width: 60%;
            height: 70%;
            border-radius: 20px;
            border: 3px solid;
            border-color: rgb(129, 79, 209);
            margin-bottom: -20%;
            margin-top: -15%;
            margin-left: -1%;


        }

        p {
            position: absolute;
            margin-left: 44%;
            text-align: center;
            margin-top: 2%;
            margin-left: 41%;
            font-size: 1.5vw;
        }

        .userid {
            position: absolute;
            font-size: 1.5vw;
            margin-left: 4%;
            margin-top: 7%;
        }

        .email {
            position: absolute;
            font-size: 1.5vw;
            margin-left: 56%;
            margin-top: 7%;
        }

        .password {
            position: absolute;
            font-size: 1.5vw;
            margin-left: 4%;
            margin-top: 20%;
            padding: 0%;
        }

        .phone {
            position: absolute;
            font-size: 1.5vw;
            margin-left: 56%;
            margin-top: 20%;
        }

        .plchldr1 {
            position: absolute;
            margin-top: 12%;
            margin-left: 4%;
            background-color: rgb(243, 237, 247);
            color: rgb(40, 41, 41);
            height: 10%;
            width: 35%;
            border-radius: 15px;
            border-color: black;
        }

        .plchldr2 {
            position: absolute;
            margin-top: 12%;
            margin-left: 56%;
            background-color: rgb(243, 237, 247);
            color: rgb(0, 0, 0);
            height: 10%;
            width: 35%;
            border-radius: 15px;
            border-color: black;
        }

        .plchldr3 {
            position: absolute;
            margin-top: 25%;
            margin-left: 4%;
            background-color: rgb(243, 237, 247);
            color: rgb(0, 0, 0);
            height: 10%;
            width: 35%;
            border-radius: 15px;
            border-color: black;
        }

        .plchldr4 {
            position: absolute;
            margin-top: 25%;
            margin-left: 56%;
            background-color: rgb(243, 237, 247);
            color: rgb(0, 0, 0);
            height: 10%;
            width: 35%;
            border-radius: 15px;
            border-color: black;
        }

        .name {
            position: absolute;
            margin-left: 4%;
            margin-top: 36%;
            width: auto;
            padding: 1%;
            padding-right: 35px;
            background-color: rgb(231, 222, 239);
            border-radius: 15px;
            font-size: 1.5vw;
            text-align: center;
        }

        .address {
            position: absolute;
            margin-left: 62%;
            margin-top: 36%;
            width: 20%;
            padding: 1%;
            background-color: rgb(231, 222, 239);
            border-radius: 15px;
            font-size: 1.5vw;
            text-align: center;
        }

        .button {
            position: absolute;
            margin-left: 40%;
            margin-top: 41%;
            height: 15%;
            width: auto, relative;
            border-radius: 15px;
            background-color: rgb(6, 175, 94);
            color: aliceblue;
            font-size: 1.5vw;
        }
    </style>
</head>

<body>

</body>

</html>
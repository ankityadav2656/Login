<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true)
{
    
}


?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/all.css" rel="stylesheet">
<form>
    <div class="container">
        <label class="helloname"><i class="fa-solid fa-user"><?php echo "Welcome".$_POST['username'] ?></i></label>
         <div class="container2">

            <p><b><i class="fa-solid fa-user"></i> Edit</b></p>
            <label class="userid"><b>User Id</b></label>
            <label class="email"><b>Email </b></label>
            
            <input class="plchldr1" type="text" placeholder="    mrabc123" name="user_id">
            <input class="plchldr2" type="text" placeholder="    abc@gmail.com" name="user_id" required>

            <label class="password"><b>Password</b></label>
            <label class="phone"><b>Phone</b></label>
            
            <input class="plchldr3" type="text" placeholder="    Password" name="user_pswrd">
            <input class="plchldr4" type="text" placeholder="    Phone" name="user_phone">
        

            <label class="name"><b>Name of coporate</b></label>


            <label class="address"><b>Address</b></label>
            <button class="button" type="button">Update</button>
        </div>
    </div>

</form>

<head>
    <link rel="stylesheet" href="e/work/css/all">
    <link rel="stylesheet" href="p1edit.css">
    <style>
        .container {
    background-color: rgb(235, 223, 246);
    position:relative;
    padding: 15%;
    width:30%;
    height:25%;
    border-radius: 20px;
    border: 3px solid;
    border-color: rgb(129, 79, 209);
    margin-left: 12%;
    margin-top:10%;


}
.container2 {
    background-color: rgb(247, 241, 234);
    position: absolute;
    width: 60%;
    height:70%;
    border-radius: 20px;
    border: 3px solid;
    border-color: rgb(129, 79, 209);
    margin-bottom: -20%;
    margin-top: -18%;
    margin-left: -8%;


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
    margin-left:4%;
    margin-top:9%;
}

.email {
    position: absolute;
    font-size:1.5vw;
    margin-left:56%;
    margin-top:9%;
}

.password {
    position: absolute;
    font-size:1.5vw;
    margin-left:4%;
    margin-top:25%;
    padding: 0%;
}

.phone {
    position: absolute;
    font-size:1.5vw;
    margin-left:56%;
    margin-top:25%;
}

.plchldr1 {
    position: absolute;
    margin-top: 15%;
    margin-left:4%;
    background-color: rgb(243, 237, 247);
    color: rgb(40, 41, 41);
    height:10%;
    width:35%;
    border-radius: 15px;
    border-color: black;
}

.plchldr2 {
    position: absolute;
    margin-top:15%;
    margin-left:56%;
    background-color: rgb(243, 237, 247);
    color: rgb(0, 0, 0);
    height:10%;
    width:35%;
    border-radius: 15px;
    border-color: black;
}

.plchldr3 {
    position: absolute;
    margin-top:30%;
    margin-left:4%;
    background-color: rgb(243, 237, 247);
    color: rgb(0, 0, 0);
    height:10%;
    width:35%;
    border-radius: 15px;
    border-color: black;
}

.plchldr4 {
    position: absolute;
    margin-top:30%;
    margin-left:56%;
    background-color: rgb(243, 237, 247);
    color: rgb(0, 0, 0);
    height:10%;
    width:35%;
    border-radius: 15px;
    border-color: black;
}

.name {
    position: absolute;
    margin-left:4%;
    margin-top:40%;
    width:auto;
    padding:1%;
    padding-right: 35px;
    background-color: rgb(231, 222, 239);
    border-radius: 15px;
    font-size:1.5vw;
    text-align: center;
}

.address {
    position: absolute;
    margin-left:62%;
    margin-top:40%;
    width:20%;
    padding:1%;
    background-color: rgb(231, 222, 239);
    border-radius: 15px;
    font-size:1.5vw;
    text-align: center;
}

.button {
    position: absolute;
    margin-left:41%;
    margin-top:47%;
    height:15%;
    width:auto,relative;
    border-radius: 15px;
    background-color: rgb(6, 175, 94);
    color: aliceblue;
    font-size:1.5vw;
}

 .helloname {
     position: absolute;
            margin-left:56%;
            margin-top:-23%;
            padding:1%;
            background-color: rgb(229, 211, 244);
            border-radius:5px;
            font-size: 1vw;
            width: auto,relative;
        }

        input {
            font-size:1.5vw;

        }
    
    </style>
</head>

<body>

</body>

</html>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>

    <style>
        .container {
            background-color: rgb(235, 223, 246);
            position: relative;
            padding: 15%;
            width: 20%;
            height: 30%;
            border-radius: 20px;
            border: 3px solid;
            border-color: rgb(129, 79, 209);
            margin-left: 22%;
            margin-top: 12%;
        }

        .container2 {
            display: block;
            background-color: rgb(247, 241, 234);
            position: absolute;
            width: 50%;
            height: 70%;
            border-radius: 20px;
            border: 3px solid;
            border-color: rgb(129, 79, 209);
            margin-bottom: -20%;
            margin-top: -20%;
            margin-left: -6%;


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
            margin-left: 30%;
            margin-top: 15%;
        }

        .password {
            position: absolute;
            font-size: 1.5vw;
            margin-left: 30%;
            margin-top: 37%;
            padding: 0%;
        }

        .plchldr1 {
            position: absolute;
            margin-top: 23%;
            margin-left: 30%;
            background-color: rgb(243, 237, 247);
            color: rgb(40, 41, 41);
            height: 10%;
            width: 35%;
            border-radius: 15px;
            border-color: black;
        }

        .plchldr2 {
            position: absolute;
            margin-top: 45%;
            margin-left: 30%;
            background-color: rgb(243, 237, 247);
            color: rgb(0, 0, 0);
            height: 10%;
            width: 35%;
            border-radius: 15px;
            border-color: black;
        }

        .button {
            position: absolute;
            margin-left: 40%;
            margin-top: 60%;
            height: 12%;
            border-radius: 15px;
            background-color: rgb(6, 175, 94);
            color: aliceblue;
            font-size: 1vw;
        }
    </style>
</head>

<body>

    <form action="log.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="container2">
                <p><b><i class="fa-solid fa-user"></i> Login</b></p>
                <label class="userid"><b>User Id</b></label>
                <input class="plchldr1" type="text" placeholder="Your Id" name="username" required>

                <label class="password"><b>Password</b></label>
                <input class="plchldr2" type="password" placeholder="Password" name="password">

                <input type="submit" class="button" name="save">
            </div>
        </div>

    </form>
</body>

</html>
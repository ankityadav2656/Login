<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>

<body>
    <?php

    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        header("Location: login.php");
    }


    ?>
    <h3>Hello <?php echo htmlspecialchars($_SESSION["username"]); ?> Welcome</b></h3>
    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</body>

</html>
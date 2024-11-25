<?php
        session_start();
        if(!isset($_SESSION["rname"])){
            header("location:login.php");
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo php </title>
</head>
<body>
    <a href="another.php">another</a>

    <form action="#" method="post">
        <div>
            ID: <br>
            <input type="text" name="txtId" id="">
        </div>
        <div>
            Name: <br>
            <input type="text" name="txtName">
        </div>
        <div>
            Email: <br>
            <input type="email" name="txtemail" id="">
        </div>
        <div>
            Password: <br>
            <input type="password" name="txtpassword" id="">
        </div>
        <div>
            Phone: <br>
            <input type="number" name="txtNumber" id="">
        </div>
        <div>
            <input type="submit" name="btn" value="submit" id="">
        </div>
    </form>
    <a href="logout.php">Log out</a>
</body>
</html>
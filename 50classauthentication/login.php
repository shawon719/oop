<?php
        session_start();
        if(isset($_POST["btn"])){
            $username=$_POST["txtusername"];
            $password=$_POST["txtpassword"];
            if($username=="admin" && $password=="123"){
                $_SESSION["rname"]=$username;
                header("location:demo.php");
            }
            else{
                $msg="username or passwoed is incorrectE!";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authenticaton </title>
</head>
<body>
        <?php
                echo isset($msg)?$msg:"";
        ?>
        <section id="forms">
            <form action="#" method="post">
                <div>
                        User Name: <br>
                        <input type="text" name="txtusername" id="n">
                </div>
                <div>
                        Password: <br>
                        <input type="password" name="txtpassword" id="p">
                </div>
                 
                <div>
                        <input type="submit" name="btn" value="submit">
                </div>
            </form>
        </section>
    
</body>
</html>
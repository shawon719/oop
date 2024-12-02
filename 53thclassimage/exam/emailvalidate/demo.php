<?php
        // session_start();
        // if(!isset($_SESSION["sname"])){
        //     header("location:login.php");
        // }


        // if (isset($_POST["btnSubmit"])) {
        //$filename = $_FILES["my_file"]["name"];
        //$temp_file = $_FILES["my_file"]["tmp_name"];
        //var_dump($filename);
        //$size=$_FILES["my_file"]["size"];
        //$type=$_FILES["my-file"]["type"];

        // The directory where the file will be saved
        //$img = "image/";

        //$kb=$size/1024;

        //if($kb>500 && $type=="jpg"){
         //   move_uploaded_file("$temp_file","$img.$filename");
           // echo "successful";
        //}else{
            //echo "size is less than 500";
        //}
        // $email=$_POST["txtemail"];
        // $a="/^[a-zA-Z0-9._%-+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        //  if(!preg_match($a,$email)){
        //     echo "email valid.";
        //  }

        // Check if the file name is not empty
        // if (!empty($filename)) {
        //     // Construct the full path where the file will be moved
        //     $target_file = $img . basename($filename);

        //     // Move the uploaded file to the target directory
        //     if (move_uploaded_file($temp_file, $target_file)) {
        //         echo "File has been uploaded successfully.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // } else {
        //     echo "Please select a file.";
        // }
   // }
?>

<!-- <!DOCTYPE html>
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
            <input type="text" name="txtemail" id="">
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
            <input type="file" name="my_file" id="">
        <input type="submit" name="btnSubmit" value="Submit" id="">
        </div>
        <div>
                <input type="submit" name="btn" value="submit" id=""> 
        </div>
    </form>
    <a href="logout.php">Log out</a>
</body>
</html> -->


email validation 



<?php
// session_start();
// if(!isset($_SESSION['rnam'])){
//     header("location:login.php");
// }
if(isset($_POST['btnSubmit'])){
    $name = $_POST['txtName'];
    $email = $_POST['emailName'];
    $phone = $_POST['phoneName'];

    $emailpattren ='/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if(!preg_match($emailpattren,$email)){
        echo "Please inter a valid";
    }else{
        echo"submit successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General body and layout styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the form */
        section {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Styling the logout link */
        .logout-link {
            text-align: right;
            margin-bottom: 10px;
        }

        .logout-link a {
            text-decoration: none;
            font-size: 14px;
            color: #007bff;
        }

        .logout-link a:hover {
            text-decoration: underline;
        }

        /* Form labels */
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        /* Input fields */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* Submit button */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Styling for sections and divs */
        div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <section>
        <!-- Logout link -->
        <div class="logout-link">
            <a href="log_out.php">Logout</a>
        </div>

        <!-- Form -->
        <form action="" method="post">
            <div>
                <label for="txtName">Name:</label>
                <input type="text" id="txtName" name="txtName" placeholder="Enter your name"/>
            </div>
            <div>
                <label for="emailName">Email:</label>
                <input type="text" id="emailName" name="emailName" placeholder="Enter your email"/>
            </div>
            <div>
                <label for="phoneName">Phone:</label>
                <input type="text" id="phoneName" name="phoneName" placeholder="Enter your phone number"/>
            </div>
            <div>
                <button type="submit" name="btnSubmit">Submit</button>
            </div>
        </form>
    </section>
</body>
</html>

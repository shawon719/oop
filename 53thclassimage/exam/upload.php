<?php
    if (isset($_POST["btnSubmit"])) {
        $filename = $_FILES["my_file"]["name"];
        $temp_file = $_FILES["my_file"]["tmp_name"];
        $size=$_FILES["my_file"]["size"];
        $type=$_FILES["my_file"]["type"];
        $img = "image/";
        $kb=$size/1024;
        // The directory where the file will be saved
        
        // var_dump($filename);

        

        

        if(!$kb>500){
            echo "image size must be less then 500kb";
        }elseif(!$type=="png"){
            echo"image file must be png formate";
        }
        else{
            move_uploaded_file("$temp_file","$img.$filename");
            echo "successful";
            
        }

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
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Page background and text styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Container for form */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        /* Style for form elements */
        input[type="file"] {
            display: block;
            margin: 20px auto;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 80%;
            background-color: #f0f0f0;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Style for the uploaded image */
        img {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Your Image</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="my_file" id="my_file">
            <input type="submit" name="btnSubmit" value="Submit">
        </form>

        <?php
            if (isset($_POST["btnSubmit"]) && isset($_FILES["my_file"])) {
                $img = $_FILES["my_file"]["tmp_name"];
                if ($img) {
                    // Get the uploaded image file path
                    echo "<img src='$img' alt='Uploaded Image' width='500px'>";
                }
            }
        ?>
    </div>
</body>
</html>

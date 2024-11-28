<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

    if(isset($_POST["btnSubmit"])){
        $file=$_FILES["filename"]["name"];
        $tmp=$_FILES["filename"]["tmp_name"];
        $size=$_FILES["filename"]["size"];
        //var_dump($file);
        //var_dump($tmp);
        $type=$_FILES["filename"]["type"];
        var_dump($size);
        var_dump($type);
        $img="image/";
        $kb=$size/1024;
        echo  "kb:".$kb;

        if($kb>400 && $type=="png"){
            echo "file is too large and not png file.";
        }
        else{
            move_uploaded_file("$tmp","$img.$file");
            echo "<img src='$img.$file' alt='bangbung'>";
            echo "sucessfully uploaded!!";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload 02</title>        
</head>
<body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="filename" id="">
            <input type="submit" name="btnSubmit" value="UPLOAD" id="">
        </form>

        <?php
            //echo "<img src='$img.$file' alt='img2' width='300px'>";
        ?>
</body>
</html>
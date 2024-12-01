<?php
    if(isset($_POST["sub"])){
        $a=$_POST["na"];
        $b=$_POST["num"];
        sum($a,$b);
    }

    function sum($num1,$num2){
        try{
            if((!is_numeric($num1)) || (!is_numeric($num2))){
                throw new Exception("Both numbers must be numeric");
            }
            else{
                $result=$num1+$num2;
                echo "<div class='result'>The sum of $num1 and $num2 is: $result</div><br>";
            }
        }
        catch(Exception $error){
            echo "<div class='error'>Error: ".$error->getMessage()."</div><br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form error     </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sum Calculator</h1>
    <form action="#" method="post">
        <label for="na">Num1:</label>
        <input type="text" name="na" id="na"><br>
        
        <label for="num">Num2:</label>
        <input type="text" name="num" id="num"><br>
        
        <input type="submit" name="sub" value="Submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method="post">
        <label for="aside">A value:</label>
        <input type="text"  name="aside"><br><br>

        <label for="bside">B value:</label>
        <input type="text"  name="bside"><br><br>

        <input type="submit" value="calculate" name="calculate">
    </form>
</body>
</html>

<?php

    function find_hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

   
    if(isset($_POST["calculate"])){

        $aside = $_POST["aside"];
        $bside = $_POST["bside"];

        if(empty($aside)|| empty($bside)){
            echo"Please Input values";
        }
        else{
            $hypotenuse = round(find_hypotenuse($aside, $bside), 2);
            echo $hypotenuse;
        }
        
    }
?>
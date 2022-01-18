<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "post">
        <p> ค้นหา:<input name= "pow">
        <input name= "submit" type= "submit" value= "go"></p>
                    </form>
					<?php
        for($i=2;$i<=50;$i++){
        for($n=1;$n<=2;$n++){
        echo " ".$i." ^2 ".$n." = ".pow($i,$n)."<br>";

        }	
    }
?>
</body>
</html>
<html>
    
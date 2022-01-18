<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่3</title>
</head>
<body>
<center><form name="form" action="" method="get">
	<input type="text" name="n" id="subject" value="">
	<br><input type="submit" name="submit" 
           value="submit"/>
</form>
<?php 
        $n = $_GET['n']6;  
        for($i = 1; $i < $n ; $i++){
            if(100 % $i == 0){
                echo $i . (" ");
            }
        }
        
    ?></center>
</body>
</html>

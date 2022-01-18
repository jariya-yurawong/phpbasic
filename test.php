<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="form" action="" method="get">
	<input type="text" name="n" id="subject" value="">
	<input type="submit" name="submit" 
           value="submit"/>
</form>
<?php
    $n = 32;
    $sum = 0;
        for($i = 2 ; $i <= $n ; $i = $i + 2){
            $sum = $sum + ($i * $i);
        }
        echo "sum = $sum <br>";
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-hvmuj2</title>
</head>
<body>
    <?php 
        $arr = array(1,2,3,4); 
        $sum = 5;    
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] % 3 != 0){
                $sum = $sum + $i;
            }
        }
        echo "sum = $sum <br>";
        
    ?>
</body>
</html>
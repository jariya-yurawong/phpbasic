!DOCTYPE html>
<html>
    <head>
        <title>เลขยกกำลัง</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
        
        <body>
        <body bgcolor="pink">   
        <form method= "post">
                    <p>ใส่เลขที่ต้องการ :<input name= "pow">
                    <input name= "submit" type= "submit" value= "เลือก"></p>
                    </form>
					<?php
for($i=2;$i<=10;$i++){
	for($n=1;$n<=2;$n++){
	echo "หมายเลข ".$i." ยกกำลัง ".$n." = ".pow($i,$n)."<br>";

	}	
}
?>
	</body>
</html>
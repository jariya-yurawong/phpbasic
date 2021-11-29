<!Doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>เกรด</title>
            </head>

            <body>
            <form action="" method="post">
            ป้อนคะแนน:<input type="text"name="txtscore"><br>
            <input type="submit">
            </form>
            <hr>
            <?php    
            echo "นักศึกษาได้คะแนน ".$s=$_POST["txtscore"];
            echo "<hr>";
            if ($s>25){
            echo " คุณกรอกคะแนนเกินนะจ๊ะ";
            } else if ($s>=80){
            echo " A ";
            } else if ($s>=79){
            echo " B+ ";
            } else if ($s>=74){
            echo " B ";
            } else if ($s>=69){
            echo " C+ ";
            } else if ($s>=64){
            echo " C ";
            } else if ($s>=59){
            echo " D+ ";
            } else if ($s>=54){
            echo " D ";
            } else {
            echo " F ";
            }
            ?>
        </body>
    </html>
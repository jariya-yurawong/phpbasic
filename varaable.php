<?php
$a = "hello";
echo ($a);
echo ("<br>");
define("PROVINCE","Bangkok");
echo PROVINCE;
echo ("<br>");
define("SALARY",15000);
echo SALARY;
echo ("<br>");
$t = date("H");
echo $t;
echo ("<br>");
if ($t < "20"){
    echo "Have a good day !";
}else{
    echo "Have a night !";
}

if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }


$favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    
?>


<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width,initial-scale=1">
        <title></title>
    </header>
    <body>
        <h1>
        <?php
        echo ($a);
        ?>
        </h1>
        <div style="font-size:lager; color:blue;">
        <?php
        echo "<b> คณะบริหารธุรกิจ สาขาเทคโนโลยีสารสนเทศทางธุรกิจ ประกอบด้วย 3 วิชาเอก</b>";

        ?>
        </div>
        <ul>
            <?php
            echo "<li> การจัดการ</il>";
            echo "<li> พัฒนาซอร์ฟแวร์</il>";
            echo "<li> มัลติมีเดีย</il>";
            ?>
        </ul>

    </body>
</html>
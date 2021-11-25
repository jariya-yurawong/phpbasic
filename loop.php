<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width,initial-scale=1">
        <title>Loop</title>
    </header>
    <body>
        <?php
        # for loop
        echo("for loop <br>");
        #x+=2 ; x+x+2
        for($x = 1 ; $x <= 10; $x+=2 ){
            echo "The number Is: $x <br>";
            # echo "The number Is: '.$x." <br>";(syntax old)
        }
        # while loop
        echo("while loop <br>");
        $w=1;
        while($w<=10){
            echo "The number is : $w <br>";
            $w++;
        }
        # do while loop
        echo("do while loop <br>");
        $d=1;
        do{
            echo "The number is : $d <br>";
            $d++;
        }while($d<=10);


        #Continue
        echo("Continue <br>");
        for($a=0;$a<10;$a++){
            if ($a == 4){
                continue;
            }
            echo "The number is : $a <br>";
        }
        # Break
        echo("Break <br>");
        for($a=0;$a<10;$a++){
            if ($a == 4){
                break;
            }
            echo "The number is : $a <br>";
        }

        ?>

        

    </body>
</html>
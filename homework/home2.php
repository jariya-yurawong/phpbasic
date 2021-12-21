
 <!DOCTYPE html>
<html>
    <head>
        <title>เกรด</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
    </head>เกรดที่คุณได้
    <body style="background-color:powderblue;">
        <?php
        $score = 80;
        if( $score <= 50 ){
            echo " F";
        }else if( $score >= 50 && $score < 60 ){
            echo " D";
        }else if( $score >= 60 && $score < 70 ){
            echo " C";
        }else if( $score >= 70 && $score < 80 ){
            echo " B";
        }else if( $score >= 80 && $score < 100 ){
            echo " A";
        }
       
        ?>
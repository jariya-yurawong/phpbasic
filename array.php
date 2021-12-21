<?php
    //array
    $cars = array("Volvo", "BMW", "Toyota","Honda");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo("<br>");
    echo "I like $cars[0] ,$cars[1] and $cars[2] .";
    for ($i=0; $i<count ($cars) ;$i++){
        echo("$cars[$i]<br>");
    }

    // Associative Array
    $age = array("Peter"=>"35","Ben"=>"37", "Joe"=>"43");
    echo "Peter is". $age['Peter']." years old.";
    echo "Ben is". $age['Ben']." years old.";
    echo "Joe is". $age['Joe']." years old.";

    //Multidimensional Arrays 2มิติ
    $cars1 = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
        echo ("<br>");
        echo $cars1 [0][0].": In stock: ".$cars1 [0][1].": sold:".$cars1 [0][2].".<br>";
        echo $cars1 [1][0].": In stock: ".$cars1 [1][1].": sold:".$cars1 [1][2].".<br>";
        echo $cars1 [2][0].": In stock: ".$cars1 [2][1].": sold:".$cars1 [2][2].".<br>";
        echo $cars1 [3][0].": In stock: ".$cars1 [3][1].": sold:".$cars1 [3][2].".<br>";

        //Sort array
        sort ($cars);
        for ($i=0; $i<count ($cars) ;$i++){
            echo("$cars[$i]<br>");
        }
        $numbers = array(4, 6, 2, 22, 11);
        sort( $numbers);
        for ($i=0; $i<count ($numbers) ;$i++){
            echo("$numbers[$i] ,");
        }
        /**
            * sort() - sort arrays in ascending order
         * rsort() - sort arrays in descending order
         * asort() - sort associative arrays in ascending order,according to the value
         * ksort() - sort associative arrays in ascending order,according to the key
         * arsort() - sort associative arrays in descending order,according to the value
         * krsort() - sort associative arrays in descending order,according to the key
         */
?>
<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title></title>
    </header>
    <body>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    do {
        $number = rand(0, 8);
        echo "Random number = $number\n";
    } while ($number != 0);

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Server time.
    // $hour = date('H');
    // echo $hour;

    $hour = rand(1,24);
    echo $hour;

    if($hour < 12) {
        echo "Good morning.";
    }elseif($hour > 12) {
        echo "Good evening.";
    }
    ?>
</body>
</html>
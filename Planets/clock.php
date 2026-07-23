<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>clock</title>
    <style>
        .timer {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="timer">
        <?php
            // while(true)
            // {
            //     $currenttime = date("H:i:s");
            //     echo $currenttime . "\n";
            //     sleep(1);
            // }
            date_default_timezone_set("Asia/Calcutta");
            echo date("H:i:s");
        ?>
    </div>
    <?php
    echo date("D,F d Y");
    echo "</br>";

    ?>
</body>

</html>
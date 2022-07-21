<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            date_default_timezone_set("Asia/Baku");
            $hour = (int)date("H");
            $name = "Rafael";
        
            $msg = $hour >= 18 ? "Axshaminiz xeyir" :
                   ($hour >= 12 ? "Her vaxtiniz xeyir" :
                   ($hour >= 6 ? "Sabahiniz xeyir" : "Geceniz xeyire"));
        
            echo $name . $msg;

            /*
            $a = 5;
            $b = '8.2';

            echo "<p>" . var_dump($a + $b);
            */
        ?>
    </body>
</html>
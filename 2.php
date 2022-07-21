<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            $a = 'Ömər';

            $str = "<b>$a</b> sözü " . mb_strlen($a, 'UTF-8') . " hərfdən ibarətdir";
            echo $str;
            echo strip_tags($str);

            $x = 5;

            echo ++$x;
            echo $x;
        ?>
    </body>
</html>
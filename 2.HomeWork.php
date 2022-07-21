<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 2 Lesson HW</title>
</head>
<body>
    <?php
        //part1
        echo "Part 1. <br>";

        $x = 54;
        echo "Statistics: <br>";
        echo " Integer: " . is_int($x) . "<br>";
        $msg = "Zero";
        if ($x < 0) $msg = "Negative";
        elseif($x > 0) $msg = "Positive";
        echo "negative / 0 / positive: " . $msg . "<br>";

        $msg = "Odd";
        if ($x % 2 == 0) $msg = "Even";
        echo "Odd / Even: " . $msg;
        echo "<br><br><br><br>";
        
        
        //part2
        echo "Part 2. <br>";
        $a = rand(0, 100);
        $b = rand(0, 100);
        echo "a: " . $a . "   b: " . $b . "<br>";
        
        if ($a > $b) {
            echo "a+b: " . ($a + $b) . "<br>";
            echo "a-b: " . ($a - $b) . "<br>";
            echo "a/b: " . ($a / $b) . "<br>";
            echo "a*b: " . ($a * $b) . "<br>";
        }
        else{
            echo "b+a: " . ($b + $a) . "<br>";
            echo "b-a: " . ($b - $a) . "<br>";
            echo "b/a: " . ($b / $a) . "<br>";
            echo "b*a: " . ($b * $a) . "<br>";
        }
        echo "<br><br><br><br>";
        
        
        //part3.
        echo "Part 3. <br>";
        $x = rand(0, 100);
        $x2 = rand(0, 100);
        $x3 = rand(0, 100);
        echo "x: " . $x . "<br>x2: " . $x2 . "<br>x3: " . $x3 . "<br><br>";
        echo "Max: " . max($x, $x2, $x3) . "<br>";
        echo "Min: " . min($x, $x2, $x3) . "<br>";
        echo "Sum: " . array_sum(array($x, $x2, $x3)) . "<br>";
        echo "Result: " . ($x * $x2 * $x3) . "<br>";
        echo "Number Average: " . (array_sum(array($x, $x2, $x3)) / 2) . "<br>";



        
        

    ?>
</body>
</html>
<?php
    function colorChanger($color){
        return $color == "grey" ? "black" : "grey";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3 Home Work</title>
    <style>
        .cell{
            width: 40px !important;
            height: 40px !important;
            border: 0 !important;
            margin: 0 !important;
        }
        .cell2{
            width: 40px !important;
            height: 40px !important;
            border: 0 !important;
            margin-right: 10px !important;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $n = isset($_GET["n"]) ? $_GET["n"] : 1;

        echo '<form method="get" style="margin-bottom: 20px;">';
            echo '<select name="n" id="n" style="margin-right: 10px;">';
            for ($i=0; $i < 9; $i+=2) {
                if ($i == 0) 
                    continue;
                if ($i == $n) 
                    echo "<option selected>$i</option>";
                else
                    echo "<option>$i</option>";
            }
            echo "</select>";
            echo '<button type="submit">Execute</button>';
        echo '</form>';


        $c = "grey";
        echo "<table>";
        
        for ($i=0, $t=$n; $i < $n; $i++, $t--) { 
            echo '<tr>';
                echo '<td class="cell2" style="color: black;">'. $t .'</td>';
                for ($j=0; $j < $n; $j++) { 
                    echo '<td class="cell" style="background-color: ' . $c . ';border: 0 !important;"></td>';
                    $c = colorChanger($c);
                }
                $c = colorChanger($c);
            echo "</tr>";
        }
            echo "<tr>";
                echo '<td class="cell2"></td>';
                for($i = 65; $i < 65 + $n; $i++) {
                    echo '<td class="cell2" style="color: black;">'. chr($i) .'</td>';
                }
            echo "</tr>";
        
        echo "</table>";  
        ?>
</body>
</html>
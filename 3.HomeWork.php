<?php
    $n = isset($_GET['n']) ? $_GET['n'] : 1;

    $activeBtnArr = [];
    foreach ($_GET as $key => $value) {
        if ($value == "on"){
            $activeBtnArr[] = $key;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>4 HomeWork</title>
        <style>
            input[type=checkbox]{
                width: 20px;
                height: 20px;
            }
            .cell{
                width: 27px;
                height: 27px;
            }
            button[type=submit]{
                margin-top: 2rem; 
                margin-bottom: 2rem; 
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <?php
            echo '<form method="GET">';
                echo '<input type="number" name="n" id="n" min="1" max="8" value="'. $n .'">';

                echo "<table>";

                $nameCount = 1;
                for ($i=0; $i < $n; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $n; $j++) {
                        echo '<td><input type="checkbox" name="'. $nameCount .'"></td>';
                        $nameCount++;
                    }
                    echo "</tr>";
                }
                echo "</table>";

                echo '<button type="submit">Convert</button>';
            echo "</form>";

            $nameCount = 1;

            echo "<table>";

                for ($i=0; $i < $n; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $n; $j++) { 
                        $c = "grey";
                        $id = 0;
                        foreach ($activeBtnArr as $key => $value) {
                            if ($value == $nameCount){
                                $c = "blue";
                                $id = $key;
                                break;
                            }
                        }
                        unset($activeBtnArr[$id]);
                        echo '<td class="cell" style="background-color: '. $c .';"></td>';
                        $nameCount++;
                    }    
                    echo "</tr>";
                }
            echo "</table>";
        ?>
    </body>
</html>
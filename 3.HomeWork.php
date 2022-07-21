<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3 Home Work</title>
    <style>
        .cell{
            width: 70px !important;
            height: 30px !important;
            border: 0 !important;
            margin: 0 !important;
        }
        .cell2{
            width: 70px !important;
            height: 30px !important;
            border: 0 !important;
            margin-right: 10px !important;
            text-align: center;
        }
    </style>
</head>
<body>
        <?php
            $chess = [
                "8" => [
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black"
                ],
                "7" => [
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                ],
                "6" => [
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                ],
                "5" => [
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                ],
                "4" => [
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                ],
                "3" => [
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                ],
                "2" => [
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                ],
                "1" => [
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                    "black",
                    "grey",
                ],
                " " => [
                    "A",
                    "B",
                    "C",
                    "D",
                    "E",
                    "F",
                    "G",
                    "H"
                ]
            ];
            echo "<table>";   
            foreach ($chess as $key => $value) {
                echo "<tr>";   
                echo "<td>";
                    echo '<h1 class="cell2" style="color: black;" >'. $key .  '</h1>';                
                echo "</td>";
                if ($value[0] == "A") {
                    for ($i=0; $i < count($value); $i++) { 
                        echo '<td class="cell2">' . $value[$i] . '</td>';
                    }
                }
                for ($i=0; $i < count($value); $i++) { 
                    echo '<td class="cell" style="background-color: ' . $value[$i] . ';"></td>';
                }
                echo "</tr>";   
            }   
            echo "</table>";      
        ?>
</body>
</html>
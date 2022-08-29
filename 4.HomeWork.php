<?php
    include "trans.php";
    
    $lang = isset($_GET["lang"]) ? $_GET["lang"] : "az";
    $page = isset($_GET["page"]) ? $_GET["page"] : "main";

    $lang = file_exists($lang) ? $lang : 'az'; //added line. lang error fixed.

    $file = "$lang/$page.php";

    include "header.php";
    include file_exists($file) ? $file : '404.php';
    include "footer.php";
?>
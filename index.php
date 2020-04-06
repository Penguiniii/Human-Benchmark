<!DOCTYPE html>
<?php

    $page = "error";

    if(isset($_GET["page"]) AND file_exists("pages/".$_GET["page"].".php")) {

        $page = $_GET["page"];

    } elseif(!isset($_GET["page"])) {

        $page = "home";

    }

?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Human Benchmark</title>

        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <link rel="stylesheet" href="./css/TypingSpeed.css"> 
    </head>

    <body>

        <div id="header">
            <?php include('./include/header.php'); ?>
        </div>

        <div id="page">
            <center>
                <?php include('./pages/'.$page.'.php'); ?>
            </center>
        </div>

    </body>
</html>
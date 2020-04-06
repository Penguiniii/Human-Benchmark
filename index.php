<!DOCTYPE html>
<?php

    $page = "error";

    if(isset($_GET["page"]) AND file_exists("pages/".$_GET["page"].".php")) 
    {
        $page = $_GET["page"];
    } 
    elseif(!isset($_GET["page"])) 
    {
        $page = "home";
    }

    $dbConnection = new mysqli('localhost', 'root', '');

    if($dbConnection->connect_error)
    {
        die('Connection to database failed.');
    }

    $dbConnection->query('CREATE DATABASE humanbenchmark');

    $dbConnection->select_db('humanbenchmark');

    $dbConnection->query('
        CREATE TABLE IF NOT EXISTS reactions (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        timeTaken int(6) NOT NULL
    )');

    $dbConnection->query('
        CREATE TABLE IF NOT EXISTS typingspeed (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        timeTaken int(6) NOT NULL
    )');

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

<?php
    $dbConnection->close();
    $dbConnection = null;
?>
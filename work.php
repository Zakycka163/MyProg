<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Разработка</title>

        <?php require_once "blocks/links.php" ?>
        
        <link href="js/bootstrap-fix.js">
        <link href="css/bootstrap-fix.css" rel="stylesheet" type="text/css">
        <link href="css/forSignOnIndex.css" rel="stylesheet" type="text/css">
        <link href="css/background2.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <?php 
            require_once "security/valid.php";
            require_once "blocks/ymkd.php";
            require_once "blocks/footer.php";
        ?>       
    </body>
</html>
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
        
        <?php require_once "security/valid.php";?> 
        
    </head>
    <body>
        <center><h3>Разработка УМР</h3></center>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                Выберете тип разработки
            </div>
            <div class="panel-body">
                <form class="input-group" method="post" charset="utf-8">
                    <select class="form-group" name="value">
                        <option selected disabled>Выбрать тип</option>
                        <option value="1">Рабочая учебная программа</option>
                        <option value="2">Учебно-методический комплекс дисциплин</option>
                    </select><br>
                    <button type="submit" class="btn btn-primary" name="submit" type="submit">Выбрать</button>
                </form> 
                <?php require_once "blocks/ymr/condition.php";?>
            </div>
        </div>
        
    </body>
</html>
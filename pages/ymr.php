<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Разработка</title>

        <?php 
            require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/links.php"); 
            require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/security/valid.php");
        ?>
        
    </head>
    <body>
        <center><h3>Разработка УМР</h3></center>
        
        <?php #require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/ymr/condition.php"); ?>
        
        <?php
        $param = "<div class='panel panel-default'>
            <div class='panel-heading'>
                Начальные параметры
            </div>
            <div class='panel-body'>
                <form class='input-group' method='post' charset='utf-8'>
                    
                    <div class='form-group'>
                        <label for='InputType'>Tип разработки</label><br>
                        <select id='InputType' name='value'>
                            <option selected disabled>Выбрать тип</option>
                            <option value='1'>Рабочая учебная программа</option>
                            <option value='2'>Учебно-методический комплекс дисциплин</option>
                        </select><br>
                    </div>
                    
                    <div class='form-group'>
                        <label for='InputType'>Задача</label><br>
                        <select id='InputType' name='task'>
                            <option selected disabled>Выбрать задачу</option>
                            <option task='1'>Задача 1</option>
                            <option task='2'>Задача 2</option>
                        </select><br>
                    </div>

                    <br><br><br>
                    <button type='submit' class='btn btn-primary' name='submit' type='submit'>Создать</button>
                </form> 
            </div>
        </div>"
        ?>
    </body>
</html>
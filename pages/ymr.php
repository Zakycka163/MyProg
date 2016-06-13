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
        
        <?php
            $param = "<div class='panel panel-default'>
                        <div class='panel-heading'>Начальные параметры</div>
                        <div class='panel-body'>
                            <form class='input-group' method='post' charset='utf-8'>
                                <div class='row'>
                                    <div class='col-xs-6'>
                                        <div class='form-group'>
                                            <center><label for='InputType'>Tип разработки</label></center>
                                            <select class='form-control' id='InputType' required name='type'>
                                                <option selected disabled style='display:none;'>Выбрать тип</option>
                                                <option type='1'>Рабочая учебная программа</option>
                                                <option type='2'>Учебно-методический комплекс дисциплин</option></select></div><br><br>

                                        <div class='form-group'>
                                            <center><label for='InputTask'>Задача</label></center>
                                            <select class='form-control' id='InputTask' required name='task'>
                                                <option selected disabled style='display:none;'>Выбрать задачу</option>";
                                                require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/base.php");
                                                connect();
                                                $user_id = $_SESSION["id"];
                                                $result = mysqli_query($link, "SELECT task_id, task FROM tasks WHERE user_id='".$user_id."'");
                                                while($row = mysqli_fetch_array($result)){
                                                    $param .= "<option task='";
                                                    $param .= $row[0];
                                                    $param .= "'>";
                                                    $param .= mb_substr($row[1], '0', '40');
                                                    $param .="</option>";
                                                }
                                                close();                    
                                            $param .= "</select><br><br><br>
                                            
                                        <div class='form-group'>
                                            <center><label for='InputName'>Название разработки</label></center>
                                            <input type='text' required minlength=5 maxlength=100 class='form-control' id='InputName' name='Name'></div></div></div>
                                        
                                <div class='col-xs-6'>
                                    <div class='form-group'>
                                        <center><label for='CommentWork'>Описание разработки</label></center>
                                        <textarea maxlength=100 class='form-control' id='CommentWork' name='CommentWork'></textarea></div><br><br><br>
                                
                                    <div class='form-group'>
                                        <center><label>Группа разработок</label></center>
                                        <div class='row'>
                                            <div class='col-xs-6'>
                                                <label for='InputTask'>Выбор готовых</label><br>
                                                <select class='form-control' id='InputTask' required name='task'>
                                                <option selected disabled style='display:none;'>Выбрать задачу</option>";
                                                connect();
                                                $result = mysqli_query($link, "SELECT * FROM groups");
                                                while($row = mysqli_fetch_array($result)){
                                                    $param .= "<option task='";
                                                    $param .= $row[0];
                                                    $param .= " title='";
                                                    $param .= $row[3];
                                                    $param .= "'>";
                                                    $param .= $row[1];
                                                    $param .="</option>";
                                                }
                                                close();                    
                                                $param .= "</select></div>
                                                
                                            <div class='col-xs-6'>
                                                <label for='NameGr'>Название группы</label>
                                                <input type='text' minlength=3 maxlength=40 class='form-control' id='NameGr' name='NameGr'><br>
                                    
                                                <label for='CommentGr'>Описание группы</label>
                                                <textarea maxlength=100 class='form-control' id='CommentGr' name='CommentGr'></textarea></div></div></div></div></div>
                                    
                                <center><button type='submit' class='btn btn-primary' name='submit' type='submit'>Создать</button></center>
                            </form></div></div>";
            
            print ($param);
                
            require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/ymr/condition.php");
        ?>
    </body>
</html>
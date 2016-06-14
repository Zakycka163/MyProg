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
            if(isset($_SESSION["ymr_id"])){
                require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/ymr/ymk.php");
            } else {
                $param = "<div class='panel panel-default'>
                            <div class='panel-heading'>Начальные параметры</div>
                            <div class='panel-body'>
                                <form class='input-group' method='post' charset='utf-8'>
                                    <div class='row'>
                                        <div class='col-xs-6'>
                                            <div class='form-group'>
                                                <center><label for='InputType'>Tип разработки*</label></center>
                                                <select class='form-control' id='InputType' required name='type'>
                                                    <option selected disabled style='display:none;'>Выбрать тип</option>";
                                                    require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/base.php");
                                                    connect();
                                                    $result = mysqli_query($link, "SELECT type_id, type FROM types");
                                                    while($row = mysqli_fetch_array($result)){
                                                        $param .= "<option value='";
                                                        $param .= $row[0];
                                                        $param .= "'>";
                                                        $param .= $row[1];
                                                        $param .= "</option>";
                                                    }
                                                    close();
                                                $param .="</select></div><br><br>

                                            <div class='form-group'>
                                                <center><label for='InputTask'>Задача*</label></center>
                                                <select class='form-control' id='InputTask' required name='task'>
                                                    <option selected disabled style='display:none;'>Выбрать задачу</option>";
                                                    
                                                    connect();
                                                    $user_id = $_SESSION["id"];
                                                    $result = mysqli_query($link, "SELECT task_id, task FROM tasks WHERE user_id='".$user_id."'");
                                                    while($row = mysqli_fetch_array($result)){
                                                        $param .= "<option value='";
                                                        $param .= $row[0];
                                                        $param .= "'>";
                                                        $param .= mb_substr($row[1], '0', '40');
                                                        $param .="</option>";
                                                    }
                                                    close();                    
                                                $param .= "</select><br><br><br>

                                            <div class='form-group'>
                                                <center><label for='name'>Название разработки*</label></center>
                                                <input type='text' required minlength=5 maxlength=100 class='form-control' id='name' name='name'></div></div></div>

                                    <div class='col-xs-6'>
                                        <div class='form-group'>
                                            <center><label for='commentWork'>Описание разработки</label></center>
                                            <textarea maxlength=100 class='form-control' id='commentWork' name='commentWork'></textarea></div><br><br><br>

                                        <div class='form-group'>
                                            <center><label>Группа разработок</label></center>
                                            <div class='row'>
                                                <div class='col-xs-6'>
                                                    <label for='group'>Выбор готовых</label><br>
                                                    <select class='form-control' id='group' required name='group'>
                                                    <option selected disabled style='display:none;'>Выбрать задачу</option>";
                                                    connect();
                                                    $result = mysqli_query($link, "SELECT * FROM groups");
                                                    while($row = mysqli_fetch_array($result)){
                                                        $param .= "<option value='";
                                                        $param .= $row[0];
                                                        $param .= "' title='";
                                                        $param .= $row['comment'];
                                                        $param .= "'>";
                                                        $param .= $row[1];
                                                        $param .="</option>";
                                                    }
                                                    close();                    
                                                    $param .= "</select></div>

                                                <div class='col-xs-6'>
                                                    <label for='nameGr'>Название группы</label>
                                                    <input type='text' minlength=3 maxlength=40 class='form-control' id='nameGr' name='nameGr'><br>

                                                    <label for='commentGr'>Описание группы</label>
                                                    <textarea maxlength=100 class='form-control' id='commentGr' name='commentGr'></textarea></div></div></div></div></div>

                                    <center><button type='submit' class='btn btn-primary' name='submit' type='submit'>Создать</button></center>
                                </form></div></div>";

                print ($param);

                require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/ymr/saveYmr.php");
            }
        ?>
    </body>
</html>
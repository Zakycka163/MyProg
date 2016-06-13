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
                        <div class='panel-heading'>
                            Начальные параметры
                        </div>
                        <div class='panel-body'>
                            <form class='input-group' method='post' charset='utf-8'>

                                <div class='form-group'>
                                    <label for='InputType'>Tип разработки</label><br>
                                    <select id='InputType' required name='type'>
                                        <option selected disabled style='display:none;'>Выбрать тип</option>
                                        <option type='1'>Рабочая учебная программа</option>
                                        <option type='2'>Учебно-методический комплекс дисциплин</option>
                                    </select><br>
                                </div>

                                <div class='form-group'>
                                    <label for='InputType'>Задача</label><br>
                                    <select id='InputType' required name='task'>
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
                                        
                                    $param .= "</select><br>
                                </div>
                                <button type='submit' class='btn btn-primary' name='submit' type='submit'>Создать</button>
                            </form> 
                        </div>
                    </div>";
            
            print ($param);
                
            require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/ymr/condition.php");
        ?>
    </body>
</html>
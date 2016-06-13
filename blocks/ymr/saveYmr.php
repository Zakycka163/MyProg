<?php
    if(isset($_POST['submit'])){
        require_once "../blocks/base.php";
        connect();
        
        if (isset($_POST['group']) or isset($_POST['nameGr'])){ 
            if (isset($_POST['nameGr'])){
                $groupName = htmlspecialchars(trim($_POST['nameGr']));                             
                if (isset($_POST['commentGr'])){
                    $groupComment = htmlspecialchars(trim($_POST['commentGr']));
                    mysqli_query($link,"INSERT INTO groups SET name='".$groupName."', comment='".$groupComment."'");                     
                } else {
                    mysqli_query($link,"INSERT INTO groups SET name='".$groupName."'");
                }                                                
                $group_id = mysqli_query($link,"SELECT LAST_INSERT_ID()");
            } else {
                $group_id = $_POST['group'];
            }
        }
        
        if (isset($_POST['type']) and isset($_POST['task']) and isset($_POST['name'])){
            connect();
            $type = $_POST['type'];
            $task = $_POST['task'];
            $date = date('Y-m-d');
            $name = $_POST['name'];
            $status = 1;
            
            if(isset($group_id) and isset($_POST['commentWork'])){
                $comment = $_POST['commentWork'];
                mysqli_query($link,"INSERT INTO works SET type_id='".$type."', task_id='".$task."', group_id='".$group_id."', name='".$name."', comment='".$comment."', created_date='".$date."', modified_date='".$date."', status_id='".$status."'");
            } elseif (isset($group_id)){
                mysqli_query($link,"INSERT INTO works SET type_id='".$type."', task_id='".$task."', group_id='".$group_id."', name='".$name."', created_date='".$date."', modified_date='".$date."', status_id='".$status."'");
            } elseif (isset($_POST['commentWork'])){
                $comment = $_POST['commentWork'];
                mysqli_query($link,"INSERT INTO works SET type_id='".$type."', task_id='".$task."', name='".$name."', comment='".$comment."', created_date='".$date."', modified_date='".$date."', status_id='".$status."'");
            } else {
                mysqli_query($link,"INSERT INTO works SET type_id='".$type."', task_id='".$task."', name='".$name."', created_date='".$date."', modified_date='".$date."', status_id='".$status."'");
            }
            
            $_SESSION["ymr_id"] = mysqli_query($link,"SELECT LAST_INSERT_ID()");
            } 
        } else {
            print "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Не спешите!</strong> Вы не выбрали тип разработки или задачу, повторите ввод данных снова
                    </div>";
        }       
    }
?>
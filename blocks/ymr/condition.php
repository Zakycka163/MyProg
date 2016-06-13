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
            
            mysqli_query($link,"INSERT INTO works SET type_id='".$type."', task_id='".$task."', kafedra='".$kaf."', email='".$email."', password='".$password."', type_id='".$admin."'");
        
            if($_POST['type']==1){
            
            }
            if($_POST['type']==2){
            
            } 
        } else {
            print "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Не спешите!</strong> Вы не выбрали тип разработки или задачу, повторите ввод данных снова
                    </div>";
        }       
    }
?>
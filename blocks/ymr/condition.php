<?php
    if(isset($_POST['submit'])){
        if (isset($_POST['type']) and isset($_POST['task'])){
            require_once "../blocks/base.php";
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
                        <strong>Не спешите!</strong> Вы не выбрали тип разработки или задачу
                    </div>";
        }       
    }
?>
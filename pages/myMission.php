<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мои задачи</title>

        <?php 
            require_once "../blocks/links.php"; 
            require_once "../security/valid.php";
            require_once "../blocks/base.php";
        ?>
        
    </head>
    <body>
        <center><h3>Мои задачи</h3></center>
        
            <?php
                connect();
                $id = $_SESSION["id"];
                $result = mysqli_query($link, "SELECT t.task, t.due_date, s.status FROM tasks t, statuses s WHERE t.user_id='".$id."' AND t.status_id=s.status_id AND t.status_id != 7");
                if($result){
                    echo "<table class='table table-bordered'><tr class='active'><td>№</td><td>Задача</td><td>Дата завершения</td><td>Статус задачи</td></tr>";
                    $i = 1; 
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>".$i."</td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
                        $i++;
                    }
                    echo "</table>";
                } else {
                    print "Задачи отсутствуют!";
                }
                close();
            ?>
        
    </body>
</html>
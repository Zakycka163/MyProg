<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Пользователи</title>
        <link rel="SHORTCUT ICON" href="img/ico.jpg" type="image">

        <?php 
            require_once "../blocks/links.php"; 
            require_once "../security/valid.php";
            require_once "../blocks/base.php";
        ?>
        
    </head>
    <body>     
        <center><h3>Пользователи</h3></center>
            <?php
                connect();
                $result = mysqli_query($link, "SELECT u.kafedra, u.email, u.first_name, u.second_name,  t.type FROM user_types t, users u WHERE t.type_id=u.type_id ORDER BY u.kafedra, u.email");
                if($result){
                    echo "<table class='table table-bordered'><tr class='active'><td>№</td><td>Кафедра</td><td>Email</td><td>Имя</td><td>Фамилия</td><td>Тип</td></tr>";
                    $i = 1; 
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr><td>".$i."</td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
                        $i++;
                    }
                    echo "</table>";
                } else {
                    print "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Ошибка! </strong>Что-то пошло не так</div>";
                }
                close();
            ?>
    </body>
</html>
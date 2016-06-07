<?php
    require_once "../blocks/base.php";
    
    
    if(isset($_POST['submit'])){
        connect();
        $query = mysqli_query($link, "SELECT user_id FROM users WHERE email='".mysqli_real_escape_string($link, htmlspecialchars(trim($_POST['email'])))."' AND password='".mysqli_real_escape_string($link, htmlspecialchars(md5(md5(trim($_POST['password'])))))."'");
        if(mysqli_num_rows($query) == 1){
            session_start(); 
            $_SESSION["id"]=implode(mysqli_fetch_assoc($query));
            header("Location: ../index.php"); 
            exit();
        } else {
            print "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Ошибка!</strong> Неверно введен Email или Пароль
                    </div>";
        }
        close();
    }
?>
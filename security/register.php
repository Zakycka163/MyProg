<?php
    $link=mysqli_connect("localhost", "root", "", "mydb");
    mysqli_query($link, "SET NAMES utf8");
    
    
    if(isset($_POST['submit'])){
        $err = "";
        $email = htmlspecialchars(trim($_POST['email']));
        
        $query = mysqli_query($link, "SELECT user_id FROM users WHERE email='".mysqli_real_escape_string($link, $email)."'");
        if(mysqli_num_rows($query) > 0){
            $err = "Пользователь с таким Email уже существует в базе данных";
        }

        if($err==""){
            $first = htmlspecialchars(trim($_POST['first']));#убирает символы для html и уберает лишние пробелы
            $second = htmlspecialchars(trim($_POST['second']));
            $kaf = htmlspecialchars($_POST['kaf']);
            $password = htmlspecialchars(md5(md5(trim($_POST['password'])))); #делает двойное шифрование
            #$admin = $_POST['admin'];
            
            if($_POST['admin']=null){
                $admin=0;
            }
            else{
                $admin = $_POST['admin'];
            }
            
            mysqli_query($link,"INSERT INTO users SET first_name='".$first."', second_name='".$second."', kafedra='".$kaf."', email='".$email."', password='".$password."', admin='".$admin."'");
            #header("Location: ../index.php"); exit();
        }
        
        else{
            print "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Ошибка!</strong> ".$err."
                    </div>";
        }
    }
?>
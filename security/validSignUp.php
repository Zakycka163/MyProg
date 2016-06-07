<?php 
    require_once "../blocks/base.php";
            
    if(!empty($_SESSION["id"])){
        connect();
        $id=$_SESSION["id"];
        $admin = mysqli_query($link, "SELECT type_id FROM users WHERE user_id='".$id."'");
        $admin=implode(mysqli_fetch_assoc($admin));
        close();
        
        if($admin=="0"){
            header("Location: ../index.php");
        } 
    } else {
        header("Location: ../index.php");
    }
?>
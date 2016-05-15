<?php 
    require_once "blocks/base.php";
            
    if($_SESSION["id"]==null){
        require_once "blocks/navGuest.php";
    } else {
        connect();
        $id=$_SESSION["id"];
        $admin = mysqli_query($link, "SELECT admin FROM users WHERE user_id='".$id."'");
        $admin=implode(mysqli_fetch_assoc($admin));
        close();
        
        if($admin=="1"){
            require_once "blocks/navAdm.php";
        }
        if($admin=="0"){
            require_once "blocks/navWork.php";
        } 
    }
?>
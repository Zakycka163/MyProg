<?php 
    require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/base.php");
            
    if(!empty($_SESSION["id"])){
        connect();
        $id=$_SESSION["id"];
        $admin = mysqli_query($link, "SELECT type_id FROM users WHERE user_id='".$id."'");
        $admin=implode(mysqli_fetch_assoc($admin));
        close();

        if($admin=="1"){
            require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/navAdm.php");
        }
        if($admin=="0"){
            require_once ($_SERVER['DOCUMENT_ROOT']."/MyProg/blocks/navWork.php");
        }
    } else {
        header("Location: /MyProg/index.php");
    }
?>
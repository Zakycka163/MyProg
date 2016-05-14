<?php
    $link=false;

    function connect(){
        global $link;
        $link=mysqli_connect("localhost", "root", "", "mydb");
        mysqli_query($link, "SET NAMES utf8");
    }
    
    function close(){
        global $link;
        $link->close(); 
    }
?>

<?php 
    require_once "blocks/base.php" ;
    connect();
    $id=$_SESSION["id"];
    $first = mysqli_query($link, "SELECT first_name FROM users WHERE user_id='".$id."'");
    $second = mysqli_query($link, "SELECT second_name FROM users WHERE user_id='".$id."'");
    $first=implode(mysqli_fetch_assoc($first));
    $second=implode(mysqli_fetch_assoc($second));
    close();
?>

<ul class="nav navbar-nav navbar-right">
    <li class="myClass2">
        
        <?php echo $first; echo $second; ?>
        
    </li>
    <li class="myClass">
        <input class="btn btn-danger btn-sm" onclick="location.href='/MyProg/security/sign_in.php'" type="button" value="Выход">
    </li>
</ul>
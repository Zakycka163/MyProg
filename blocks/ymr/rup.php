<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Создание РУП</title>

        <?php require_once "../links.php" ?>
        
    </head>
    <body>
        <div class="container" >

            <form class="form-signin" method="post">
                <center><h3 class="form-signin-heading">Авторизация</h3></center>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input lang="en" type="email" name="email" maxlength="100" required class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">***</span>
                    <input type="password" name="password" maxlength="45" required class="form-control" placeholder="Пароль" aria-describedby="basic-addon1">
                </div>
                <br>
                <center>
                    <button class="btn btn-success" name="submit" type="submit">Вход</button>
                    <a class="btn btn-danger" href="../index.php" type="button">Отмена</a>
                </center>
            </form>
            
            <?php require_once "login.php" ?>
            
        </div> <!-- /container -->
    </body>
</html>
<?php
    require_once "blocks/base.php"; #понадобиться позже
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Авторизация</title>

        <?php require_once "../blocks/links.php" ?>
        
        <link href="../css/sign.css" rel="stylesheet" type="text/css">
        <link href="../css/background.css" rel="stylesheet" type="text/css">
        
        <style type="text/css">
            body {
                padding-top: 100px;
                padding-bottom: 315px;   
            }
        </style>
        
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
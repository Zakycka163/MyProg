<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Создание пользователя</title>

        <?php require_once "../blocks/links.php" ?>
        
        <link href="../css/sign.css" rel="stylesheet" type="text/css">
        <link href="../css/background.css" rel="stylesheet" type="text/css">
        
        <style type="text/css">
            body {
                padding-top: 100px;
                padding-bottom: 49px;    
        </style>
        
    </head>
    <body>
        <?php require_once "validSignUp.php"; ?>
        <div class="container">
            <form class="form-signin" method="post" charset="utf-8">
                <center><h3 class="form-signin-heading">Создать пользователя</h3></center>
                <div class="input-group">
                    <label for="First">Фамилия</label>
                    <input type="text" lang="ru" minlength=2 maxlength="50" required class="form-control" name="first">
                </div>
                <div class="input-group">
                    <label for="Second">Имя</label>
                    <input type="text" lang="ru" minlength=2 maxlength="50" required class="form-control" name="second">
                </div>
                <div class="input-group">
                    <label for="Kaf">Кафедра</label>
                    <input type="text" lang="ru" minlength=2 maxlength="100" required class="form-control" name="kaf">
                </div>
                <div class="input-group">
                    <label for="Email">E-mail</label>
                    <input type="email" lang="en" maxlength="100" required class="form-control" name="email">
                </div>
                <div class="input-group">
                    <label for="Password">Пароль</label>
                    <input type="password" minlength=6 maxlength="45" required class="form-control" name="password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="admin" value=1> Права администратора
                    </label>
                </div>            
                <center>
                    <input class="btn btn-success" name="submit" type="submit" value="Создать">
                    <a class="btn btn-primary" href="../index.php" type="button">Вернуться</a>
                </center>
            </form>
            
            <?php require_once "register.php" ?>
            
        </div> <!-- /container -->
    </body>
</html>
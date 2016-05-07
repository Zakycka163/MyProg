<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Создание пользователя</title>
        <link rel="SHORTCUT ICON" href="img/ico.jpg" type="image">

<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
        <link href="css/sign.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
                padding-top: 100px;
                padding-bottom: 49px;
                background: #0cabfa url(img/PVGUS_4_2.jpg) no-repeat;
                -moz-background-size: 100%; /* Firefox 3.6+ */
                -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
                -o-background-size: 100%; /* Opera 9.6+ */
                background-size: cover;     
        </style>
        
    </head>
    <body>
        <div class="container">
            <form class="form-signin" method="post">
                <center><h3 class="form-signin-heading">Создать пользователя</h3></center>
                <div class="input-group">
                    <label for="First">Фамилия</label>
                    <input type="text" minlength=2 required class="form-control" name="first">
                </div>
                <div class="input-group">
                    <label for="Second">Имя</label>
                    <input type="text" minlength=2 required class="form-control" name="second">
                </div>
                <div class="input-group">
                    <label for="Kaf">Кафедра</label>
                    <input type="text" minlength=2 required class="form-control" name="kaf">
                </div>
                <div class="input-group">
                    <label for="Email">E-mail</label>
                    <input type="email" required class="form-control" name="email">
                </div>
                <div class="input-group">
                    <label for="Password">Пароль</label>
                    <input type="password" minlength=6 required class="form-control" name="password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="admin"> Права администратора
                    </label>
                </div>
                <center>
                    <input class="btn btn-primary" name="submit" type="submit" value="Создать">
                    <a class="btn btn-danger" href="index.php" type="button">Отмена</a>
                </center>
            </form>
        </div> <!-- /container -->
    </body>
</html>
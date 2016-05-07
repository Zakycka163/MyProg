<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Авторизация</title>
        <link rel="SHORTCUT ICON" href="img/ico.jpg" type="image">
        
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        
<!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <link href="css/sign.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
                padding-top: 100px;
                padding-bottom: 315px;
                background: #0cabfa url(img/PVGUS_4_2.jpg) no-repeat;
                -moz-background-size: 100%; /* Firefox 3.6+ */
                -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
                -o-background-size: 100%; /* Opera 9.6+ */
                background-size: cover;     
            }
        </style>
        
    </head>
    <body>
        <div class="container" >

            <form class="form-signin">
                <center><h3 class="form-signin-heading">Авторизация</h3></center>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="email" required class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">***</span>
                    <input type="password" required class="form-control" placeholder="Пароль" aria-describedby="basic-addon1">
                </div>
                <br>
                <center>
                    <button class="btn btn-success" type="submit">Вход</button>
                    <a class="btn btn-danger" href="index.php" type="button">Назад</a>
                </center>
            </form>
        </div> <!-- /container -->
    </body>
</html>
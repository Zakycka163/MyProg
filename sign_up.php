<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>

<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
        <style type="text/css">
            body {
                padding-top: 210px;
                padding-bottom: 49px;
                background: #0cabfa url(img/PVGUS_4_2.jpg) no-repeat;
                -moz-background-size: 100%; /* Firefox 3.6+ */
                -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
                -o-background-size: 100%; /* Opera 9.6+ */
                background-size: cover;     
            }
            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
                        border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                        box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
        </style>
        
    </head>
    <body>
        <div class="container">

            <form class="form-signin">
                <h2 class="form-signin-heading">Регистрация</h2>
                <div class="input-group">
                    <label for="First">Фамилия</label>
                    <input type="text" class="form-control" id="First">
                </div>
                <div class="input-group">
                    <label for="Second">Имя</label>
                    <input type="text" class="form-control" id="Second">
                </div>
                <div class="input-group">
                    <label for="Patron">Отчество</label>
                    <input type="text" class="form-control" id="Patron">
                </div>
                <div class="input-group">
                    <label for="Kaf">Кафедра</label>
                    <input type="text" class="form-control" id="Kaf">
                </div>
                <div class="input-group">
                    <label for="Email">E-mail</label>
                    <input type="email" class="form-control" id="Email">
                </div>
                <div class="input-group">
                    <label for="Password">Пароль</label>
                    <input type="password" class="form-control" id="Password">
                </div>
                <br>
                <center>
                    <button class="btn btn-primary" type="sumit">Зарегистрироваться</button>
                    <a class="btn btn-danger" href="sign_in.php" type="button">Отмена</a>
                </center>
            </form>
        </div> <!-- /container -->
    </body>
</html>
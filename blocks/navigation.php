<nav class="navbar navbar-default">
    <div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Главная</a>
        </div>

<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Задачи</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Работа с УМК <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Создать</a></li>
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="#">Удалить</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Редактирование Рабочей программы</a></li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Управление<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Отчеты </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Отчет 1</a></li>
                                <li><a href="#">Отчет 2</a></li>
                                <li><a href="#">Отчет 3</a></li>
                            </ul></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"><b><big>Пользователь</big></b></li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Создать </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Преподаватель-Администратор</a></li>
                                <li><a href="#">Преподаватель</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="#">Удалить</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li class="myClass">
                    <div class="input-group input-group-sm">
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                </li>
                <li class="myClass">
                    <div class="input-group input-group-sm">
                        <input type="password" class="form-control" placeholder="Пароль" aria-describedby="sizing-addon3">
                    </div>
                </li>-->
                <li class="myClass">
                    <input class="btn btn-success btn-sm" onclick="location.href='/MyProg/sign_in.php'" type="button" value="Войти">
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->               
    </div><!-- /.container-fluid -->
</nav>
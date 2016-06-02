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
            <a class="navbar-brand" href="/MyProg/index.php">Главная</a>
        </div>

<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Задачи <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/MyProg/myMission.php">Смотреть</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Определить</a></li>
                        <li><a href="#">Изменить</a></li>
                        <li><a href="#">Проверить</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Работа с УМР <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Создать возврат</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="work.php">Создать УМР</a></li>
                        <li><a href="#">Список УМР</a></li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Управление<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Отчеты </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Выполненные</a></li>
                                <li><a href="#">Возвраты на доработку</a></li>
                                <li><a href="#">По видам</a></li>
                                <li><a href="#">История по выбранным</a></li>
                            </ul></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"><b><big>Пользователь</big></b></li>
                        <li><a href="/MyProg/security/sign_up.php">Создать</a></li>
                        <li><a href="/MyProg/users.php">Изменить или удалить</a></li>
                    </ul>
                </li>
            </ul>
            
            <?php require_once "buttons/exit.php" ?>
            
        </div><!-- /.navbar-collapse -->               
    </div><!-- /.container-fluid -->
</nav>
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
                <li><a href="/MyProg/pages/myMission.php">Задачи</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Работа с УМР <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/MyProg/pages/ymr.php">Создать УМР</a></li>
                        <li><a href="/MyProg/pages/listYmr.php">Список УМР</a></li>
                    </ul>
                </li>
                
            </ul>
            
            <?php 
                require_once "buttons/exit.php";
                require_once "footer.php";
            ?>
            
        </div><!-- /.navbar-collapse -->               
    </div><!-- /.container-fluid -->
</nav>
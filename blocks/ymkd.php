<center><h3>Разработка УМКД</h3></center>

<?php require_once "blocks/workProg.php";?>

<div class="panel panel-default">
    <div class="panel-heading">
        <center>Учебно-методическое пособие</center>
    </div>
    <div class="panel-body">
        Panel content
    </div>
</div>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#kyrsa4" aria-expanded="false" aria-controls="collapseExample">
    Методические указания для выполнения курсовой работы/проекта
</button>
<div class="collapse" id="kyrsa4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                Методические указания для выполнения 
                <div class="btn-group btn-group-xs" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>курсовой работы
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2" autocomplete="off"> курсового проекта
                    </label>
                </div>
            </center>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
</div>

<?php require_once "blocks/labPrak.php";?>



    <?php
        if(isset($_POST['submit'])){
            connect();
            $user_id = $_POST['user'];
            $task = htmlspecialchars(trim($_POST['task']));
            $due_date = $_POST['due_date'];
            $status = 5;

            mysqli_query($link,"INSERT INTO tasks SET user_id='".$user_id."', task='".$task."', due_date='".$due_date."', status_id='".$status."'");
            print "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Успешно!</strong> Задача определена
                    </div>";
        } else {
            print "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong>Ошибка!</strong> Задачу определить не получилось
                    </div>";
        }
        close();
    ?>
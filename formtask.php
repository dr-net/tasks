<?php
if (isset($_POST["status"])) {
    require 'db.php';
extract($_POST);
        $sql = "INSERT INTO `task`(`task_id`, `task_name`, `date_todo`, `status`) VALUES
    (null,'$task_name','$date_todo','$status')";
        mysqli_query($conn, $sql);
    } else {
        $sql = "failed to upload";


}
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Task</title>
</head>
<body>
<div align="center">
<div class="card row col-sm-8 text-center justify-content-center">
    <div class="card-header bg-success">
        Add Task
    </div>
        <div class="card_body bg-dark text-warning">
<form action="formtask.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="task_name">Task Name</label>
        <input type="text" class="form-control" name="task_name" required>


    </div>
        <div class="form_froup">
            <label for="date_todo">Date</label>
            <input type="date" class="form-control" name="date_todo" required>

        </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="complete">complete</option>
            <option value="incomplete">Incomplete</option>

        </select>


    </div>

        </div>

    <button class="btn btn-dark btn-block">save task</button>
    <a href="view.php">Show Added Task</a>

</form>

</div>
</div>
</body>
</html>
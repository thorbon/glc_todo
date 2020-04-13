<?php

include 'models/task.php';

$task = new Task();
$taskList = $task->getAllTaskByUserId(1000);

print_r($taskList);

?>
<!DOCTYPE html>
<html>

<head>
    <title>TODO LIST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="stylesheet/css.css" rel="stylesheet" type="text/css">
</head>

<body>

    <h1>Welcome</h1>
    <a href="addtask.php"><button type='button' class='btn btn-info'>ADD</button></a>

    <ul class="list-group">
        <li class="list-group-item">
            <?php foreach ($taskList as $info) : ?>
                <p><b>Title:</b><?php echo $info["title"] ?></p>
                <p><b>Details:</b><?php echo $info["details"] ?></p>
                <p><b>Due Date:</b><?php echo $info["due_date"] ?></p>
                <a href=""><button type='button' class='btn btn-primary'>View</button></a>
                <a href=""><button type='button' class='btn btn-success'>Edit</button></a>
                <a href=""><button type='button' class='btn btn-danger'>Delete</button></a>
                <hr>
            <?php endforeach; ?>
        </li>
    </ul>

</body>

</html>
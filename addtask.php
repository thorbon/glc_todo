<?php

include 'models/task.php';

$task = new Task();
$taskList = $task->addTask($title, $details, $dueDate, $userId);

?>

<!DOCTYPE html>
<html>

<head>
    <title>TODO LIST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="stylesheet/css.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <?php if ($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['title']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Detail</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['detail']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Due Date</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['due_date']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
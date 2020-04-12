<?php

include 'models/users.php';

$loginData = [
    'email' => 'test@test.com',
    'password' => 'Life'
];


if (isset($_POST['email']) && isset($_POST['password'])) {

    $users = new Users();
    $loginSuccessful = $users->login($_POST['email'], $_POST['password']);


    if ($loginSuccessful === true) {
        header("Location: home.php");
    } else {
        echo 'Login Fail';
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>TODO LIST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="stylesheet/css.css" rel="stylesheet" type="text/css">
</head>

<body class="text-center">
    <form class="form-login" method="POST" action="home.php">
        <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2017-2019</p>
    </form>






</body>

</html>
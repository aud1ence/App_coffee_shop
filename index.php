<?php
use App\Middleware\Auth;
//session_start();
session_start();
$timeout = 30; // Number of seconds until it times out.

// Check if the timeout field exists.
if(isset($_SESSION['timeout'])) {
    // See if the number of seconds since the last
    // visit is larger than the timeout period.
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
        // Destroy the session and restart it.
        session_destroy();
        session_start();
    }
}

// Update the timout field with the current time.
$_SESSION['timeout'] = time();
require_once "vendor/autoload.php";
$auth = new Auth();
$auth->isLogin();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require_once "router.php"?>
<h1>OOP</h1>
<a href="index.php?page=logout">Log out</a>
</body>
</html>

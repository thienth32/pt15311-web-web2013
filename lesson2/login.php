<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post-login.php?role=admin" method="post">
        <span style="color: red"><?= $msg ?></span>
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
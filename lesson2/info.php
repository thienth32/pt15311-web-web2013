<?php

$nameErr = isset($_GET['nameErr']) ? $_GET['nameErr'] : "";
$ageErr = isset($_GET['ageErr']) ? $_GET['ageErr'] : "";
$emailErr = isset($_GET['emailErr']) ? $_GET['emailErr'] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="show-data.php" method="get">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" >
            <br>
            <span style="color: red"><?php echo $nameErr ?></span>
        </div>
        <div>
            <label for="">Age</label>
            <input type="number" name="age" >
            <br>
            <span style="color: red"><?php echo $ageErr ?></span>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" >
            <br>
            <span style="color: red"><?php echo $emailErr ?></span>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
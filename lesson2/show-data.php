<?php

$name = isset($_GET['name']) == true ? $_GET['name'] : "";
$age = isset($_GET['age']) == true ? $_GET['age'] : "";
$email = isset($_GET['email']) == true ? $_GET['email'] : "";
$nameError = "";
$ageError = "";
$emailError = "";

if($name === ""){
    $nameError = "Hãy nhập tên";
}
if($age === ""){
    $ageError = "Hãy nhập tuổi";
}
if($email === ""){
    $emailError = "Hãy nhập email";
}

if($nameError.$ageError.$emailError != ""){
    // xuất hiện lỗi
    // điều hướng ngược lại file info.php
    header("location: info.php?nameErr=$nameError&ageErr=$ageError&emailErr=$emailError");
}

?>
<h2>Thông tin cá nhân user:</h2>
<p>Họ và tên: <?php echo $name?></p>
<p>Tuổi: <?php echo $age?></p>
<p>Email: <?php echo $email?></p>
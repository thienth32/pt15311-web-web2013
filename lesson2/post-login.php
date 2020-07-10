<?php
// 1. Lấy data từ request gửi lên
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
// 2. Thực hiện kiểm tra dữ liệu
// 3. Kiểm tra username & password xem có đúng tài khoản hay không

$defaultUsername = "admin";
$defaultPassword = "123123";
if($username != $defaultUsername || $password != $defaultPassword){
    header("location: login.php?msg=Tài khoản/mật khẩu không đúng");
    die;
}

?>

<h2>Xin chào, <?php echo $username ?></h2>
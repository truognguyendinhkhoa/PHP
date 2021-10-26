<?php
session_start();
// Ket noi CSDL
require("connect.php");

$error = "";
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $strSQL = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $login_result = mysqli_query($dbc, $strSQL);
    if (mysqli_num_rows($login_result) == 0) {
        $error = "Tài khoản hoặc mật khẩu không đúng";
    } else {
        $_SESSION['nguoidung'] = $login_result;
        header("Location: dsNhanVien.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <form action="" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" type="email" placeholder="name@example.com" name="email" required />
            <label for="inputEmail">Địa chỉ email</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="password" placeholder="password" name="password" required />
            <label for="inputPassword">Mật khẩu</label>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <input class="form-control btn btn-primary" type="submit" value="Đăng nhập" />
        </div>
    </form>
    <?php
    if ($error != "") {
        echo "<div class='alert alert-danger mt-3'>";
        echo $error;
        echo "</div>";
    }
    ?>
</body>

</html>
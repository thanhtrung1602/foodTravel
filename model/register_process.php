<?php
session_start();
ob_start();
require "../model/connect.php";
if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['sdt'] != '') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $password = $_POST['password'];
    // $conn = db();
    // $stmt = $conn->prepare('SELECT * FROM user (name) values (?)');
    // $stmt->bindParam(1, $username);
    // if ($username==$stmt) {
    //     echo "username đã tồn tại";
    // }

    if (!preg_match('/^[A-Za-z0-9]{4,20}$/', $username)) {
        $_SESSION["thongbao"] = "Username chỉ chứa số và chữ không quá 20 ký tự!";
        header("location:../view/register.php");
        die();
    }
    if (!preg_match('/^[0-9]{10,12}$/', $sdt)) {
        $_SESSION["thongbao"] = "Số điện thoại chỉ chứa số!";
        header("location:../view/register.php");
        die();
    }
    if (!preg_match('/^[A-Za-z0-9]{4,20}$/', $password)) {
        $_SESSION["thongbao"] = "Password chỉ chứa số và chữ không quá 20 ký tự!";
        header("location:../view/register.php");
        die();
    }
    $conn = db();
    $stmt = $conn->prepare('INSERT INTO user (name, sdt, email, password) values (?, ?, ?, ?)');
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $sdt);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $password);
    $stmt->execute();
    // $password  = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $_SESSION["thongbao"] = "Bạn vừa đăng ký tài khoản thành công!";
    header("location: ../view/sign.php");
} else {
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin!";
    header("location:../view/register.php");
}
$conn = null;

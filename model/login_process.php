<?php
session_start();
ob_start();
require "../model/connect.php";
require "../model/monan.php";
if (isset($_POST['submit']) && ($_POST['submit']) && ($_POST['username']) != "" && ($_POST['password']) != "") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kq = getuserinfo($username, $password);
    $role = $kq[0]['role'];
    if ($role == 1) {
        $_SESSION['role'] = $role;
        header("location: ../admin/index.php");
    } 
    else {
        $_SESSION['role'] = $role;
        $_SESSION['iduser'] = $kq[0]['id'];
        $_SESSION['username'] = $kq[0]['name'];
        header("location: ../index.php");
    }
} else {
    header("location: ../view/sign.php");
    $_SESSION['thongbao'] = "Vui lòng nhập thông tin!";
}

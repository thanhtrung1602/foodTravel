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
    } elseif ($role == 0) {
        $_SESSION['role'] = $role;
        $_SESSION['iduser'] = $kq[0]['id'];
        $_SESSION['username'] = $kq[0]['name'];
        header("location: ../index.php");
    } 
} else {
    header("location: ../view/sign.php");
    $_SESSION['thongbao'] = "Vui lòng nhập thông tin!";
}
// if (isset($_POST['submit']) && ($_POST['submit'])) {
//     $fullname = $_POST['username'];
//     $pass = $_POST['password'];
//     $total = getUser($fullname, $pass);
//     if ($total) {
//         if ($total['role_id']==1) {
//             header('location: admin/index.php');
//         }else {
//             $_SESSION['username'] = $total['name'];
//             header('location: index.php');
//         }
//     } else {
//         $thongbao = "sai thong tin dang nhap ";
//     }
// } else {
//     header('location: ./view/sign.php');
// }
// require_once './view/sign.php';

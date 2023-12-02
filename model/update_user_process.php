<?php
// session_start();
// ob_start();
// require "../model/connect.php";
// if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' &&  $_POST['sdt'] != '') {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $sdt = $_POST['sdt'];
//     $conn = db();
//     $stmt = $conn->prepare('UPDATE user SET name = ?, sdt =?, email =?');
//     $stmt->bindParam(1, $username);
//     $stmt->bindParam(2, $sdt);
//     $stmt->bindParam(3, $email);
//     $stmt->execute();
//     // $password  = password_hash($_POST['password'],PASSWORD_DEFAULT);
//     $_SESSION["thongbao"] = "Bạn vừa cập nhật tài khoản thành công!";
//     header("location: ../view/sign.php");
// } else {
//     $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin!";
//     header("location:../model/update_user.php");
// }
// $conn = null;
?>
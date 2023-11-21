<?php
session_start();
ob_start();
require "../model/connect.php";
require "../model/monan.php";
    if(isset($_POST['submit']) && ($_POST['submit'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $kq = getuserinfo($username,$password);
        $role = $kq[0]['role']==1;
        if($role==1) {
            $_SESSION['role']=$role;
            header("location: ../admin/index.php");
        }elseif($role==0){
            $_SESSION['role']=$role;
            $_SESSION['idusername']=$kq[0]['id'];
            $_SESSION['username']=$kq[0]['username'];
            header("location: ../index.php");
            die();
        }else{
            header("location: ../index.php");
            $_SESSION['thongbao']="username hoặc password không tồn tại!";
        }
    }
// session_start();
// ob_start();
// require "../model/connect.php";
// require "../model/monan.php";
//     if(isset($_POST['submit']) && ($_POST['submit'])) {
//         $username=$_POST['username'];
//         $password=$_POST['password'];
//         $kq = getuserinfo($username,$password);
//         $role = $kq[0]['role']==1;
//         $role0 = $kq[0]['role']==0;
//         if($role==1) {
//             $_SESSION['role']=$role;
//             header("location: ../admin/index.php");
//         }elseif($role0==0){
//             $_SESSION['role']=$role0;
//             $_SESSION['idusername']=$kq[1]['id'];
//             $_SESSION['username']=$kq[1]['username'];
//             header("location: ../index.php");
//             die();
//             // header("location: ../view/sign.php");
//             // $_SESSION['thongbao']="username hoặc password không tồn tại!";
//         }elseif($role==" "){
//             header("location: ../view/sign.php");
//             $_SESSION['thongbao']="username hoặc password không tồn tại!";
//         }elseif($role==0){
//             $_SESSION['role']=$role;
//             $_SESSION['idusername']=$kq[0]['id'];
//             $_SESSION['username']=$kq[0]['username'];
//             header("location: ../index.php");
//             die();
//         }
//     }


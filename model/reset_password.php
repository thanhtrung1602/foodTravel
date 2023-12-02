<?php
require "../model/connect.php";
require "../model/monan.php";
$conn = db();
    if(session_id()=='') session_start();
    if (isset($_SESSION['iduser']) == false ) {
        header("location: view/sign.php");
        exit();
    }
    $tendangnhap = $_SESSION['username'];
    $loi = "";
    if (isset($_POST['submit'])==true) {
        $matkhaucu = $_POST['password_old'];
        $matkhaumoi = $_POST['password_new'];
        $matkhaumoi1 = $_POST['password_new_again'];
        $sql = "SELECT * FROM user WHERE name = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tendangnhap, $matkhaucu]);
        if ($stmt->rowCount()==0) {$loi.= "Nhập sai mật khẩu cũ<br>";}
        // if (!preg_match('/^[A-Za-z0-9]{4,20}$/', $matkhaumoi)) {
        //     $_SESSION["thongbao"] = "Password chỉ chứa số và chữ không quá 20 ký tự!";
        //     header("location:../view/register.php");
        //     die();
        // }
        if (!preg_match('/^[A-Za-z0-9]{4,20}$/', $matkhaumoi)) {$loi.= "Password chỉ chứa số và chữ không quá 20 ký tự! <br>";}
        if ($matkhaumoi!=$matkhaumoi1) {$loi.= "Nhập đúng mật khẩu cần đổi<br>";}
        if ($loi=="") {
            $sql = "UPDATE user SET password = ? WHERE name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$matkhaumoi, $tendangnhap]);
            echo "Đã cập nhật mật khẩu mới";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/reset.css">
    <link rel="stylesheet" href="../layout/sigin/sign.css">
    <link rel="stylesheet" href="./base/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./base/fontawesome-free-6.4.2-web/css/all.min.css">
    <title></title>
</head>
<body>
    <div id="regsiter">
        <header>
            <img src="/img/logo/logo_main.png" alt="">
        </header>
        <main>
            <section class="form">
                <article class="form-item">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2>Đổi mật khẩu</h2>
                        <?php if ($loi!="") {?>
                            <div><?php echo $loi?></div>
                        <?php }?>
                        <div class="form-user">
                            <input type="text" value="<?php echo $tendangnhap?>" name="username" id="" placeholder="Nhập tên">
                        </div>
        
                        <div class="form-pass">
                            <input type="password" value="<?php if(isset($matkhaucu)==true )echo $matkhaucu; ?>" name="password_old" id="" placeholder="Nhập mật khẩu cũ">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>
                        <div class="form-pass">
                            <input type="password" value="<?php if(isset($matkhaumoi)==true )echo $matkhaumoi; ?>" name="password_new" id="" placeholder="Nhập mật khẩu mới">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>
                        <div class="form-pass">
                            <input type="password" value="<?php if(isset($matkhaumoi1)==true )echo $matkhaumoi1; ?>" name="password_new_again" id="" placeholder="Nhập lại mật khẩu mới">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>
                        <div class="fogot-regsiter">
                            <span><a href="../view/sign.php">Đăng nhập tài khoản</a></span>
                            <!-- <span><a href="../model/forget_password.php">Quên mật khẩu?</a></span> -->
                        </div>

                        <div class="regsiter-sub">
                            <input type="submit" value="Đổi mật khẩu" name="submit" id="">
                        </div>
                    </form>
        
                    <div class="regsiter-img">
                        <img src="../layout/sigin/img-signin/signin-img.png" alt="">
                    </div>
                </article>
            </section>
        </main>
    </div>
</body>
</html>
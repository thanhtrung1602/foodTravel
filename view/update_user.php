<!-- <?php
// require "../model/connect.php";
// require "../model/monan.php";
// if (isset($_SESSION['username']) && (count($_SESSION['username']) > 0)) {
//     extract($_SESSION['username']);
// }
// if (isset($_POST['submit']) && ($_POST['submit'])) {
//     $username = $_POST['username'];
//     $sdt = $_POST['sdt'];
//     $email = $_POST['email'];
//     $id = $_POST['id'];
//     $role = 0;
//     update_user($username, $sdt, $email, $role, $id);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/reset.css">
    <link rel="stylesheet" href="../layout/sigin/register.css">
    <link rel="stylesheet" href="./base/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./base/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Register</title>
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
                        <h2>Cập nhật tài khoản</h2>
                        <?php if ($loi!="") {?>
                            <div><?php echo $loi?></div>
                        <?php }?>
                        <div class="form-user">
                            <input type="text" value="" name="hotenmoi" id="" placeholder="Họ và tên">
                        </div>
                        <div class="form-phone">
                            <input type="text" value="" name="sdtmoi" id="" placeholder="Số điện thoại">
                        </div>
                        <div class="form-phone">
                            <input type="email" value="" name="emailmoi" id="" placeholder="Email">
                        </div>

                        <div class="fogot-regsiter">
                             <span><a href="./register.php">Tạo tài khoản</a></span> -->

                            <!-- <span><a href="../model/reset_password.php">Đổi mật khẩu</a></span>
                        </div>
                        <div class="regsiter-sub">
                            <input type="hidden" name="id" value="">
                            <input type="submit" value="Cập nhật" name="submit" id="">
                        </div>
                    </form>

                    <div class="regsiter-img">
                        <img src="../layout/sigin/img-signin/resigter-img.png" alt="">
                    </div>
                </article>
            </section>
        </main>
    </div>
</body>

</html> -->
<?php
    session_start();
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
                    <form action="../model/register_process.php" method="post">
                        <h2>Đăng ký tài khoản</h2>
                        <?php
                        if (isset($_SESSION["thongbao"])) {
                            echo $_SESSION["thongbao"];
                            // session_unset($_SESSION["thongbao"]);
                        }
                        ?>
                        <div class="form-user">
                            <input type="text" name="username" id="" placeholder="Họ và tên" >
                        </div>

                        <div class="form-phone">
                            <input type="text" name="sdt" id="" placeholder="Số điện thoại">
                        </div>

                        <div class="form-pass">
                            <input type="password" name="password" id="" placeholder="Mật khẩu">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>

                        <div class="regsiter-sub">
                            <input type="submit" value="Tạo tài khoản" name="submit" id="">
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

</html>
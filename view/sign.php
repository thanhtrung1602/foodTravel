<?php
    session_start();
    ob_start();
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
    <title>Sign</title>
</head>
<body>
    <div id="regsiter">
        <header>
            <img src="/img/logo/logo_main.png" alt="">
        </header>
        <main>
            <section class="form">
                <article class="form-item">
                    <form action="../model/login_process.php" method="post">
                        <h2>Đăng nhập tài khoản</h2>
                        <?php
                        // if (isset($txt_erro)&&($txt_erro!="")) {
                        //     echo $txt_erro;
                        //     // session_unset($_SESSION["thongbao"]);
                        // }
                        if (isset($_SESSION["thongbao"])) {
                            echo $_SESSION["thongbao"];
                            unset($_SESSION["thongbao"]);
                        }
                        ?>
                        <div class="form-user">
                            <input type="text" name="username" id="" placeholder="Nhập tài khoản">
                        </div>
        
                        <div class="form-pass">
                            <input type="password" name="password" id="" placeholder="Mật khẩu">
                            <i class="fa-solid fa-eye-slash"></i>
                        </div>

                        <div class="fogot-regsiter">
                            <span><a href="./register.php">Tạo tài khoản</a></span>
                            <span><a href="">Quên mật khẩu?</a></span>
                        </div>

                        <div class="regsiter-sub">
                            <input type="submit" value="Đăng nhập" name="submit" id="">
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
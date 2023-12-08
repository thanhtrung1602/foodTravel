<?php

$loi = "";
if (isset($_POST['submit']) == true) {
    $email = $_POST['email'];
    require "../model/connect.php";
    $conn=db();
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $count = $stmt->rowCount();
    if ($count == 0) {
        $loi = "Email chưa được đăng ký";
    } else {
        $matkhaumoi = substr(rand(0, 999999), 0, 5);
        $sql = "UPDATE user SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$matkhaumoi, $email]);
        guimail($email, $matkhaumoi);
    }
}
?>
<?php
    function guimail($email, $matkhaumoi) {
        require "../view/PHPMailer-master/src/PHPMailer.php";
        require "../view/PHPMailer-master/src/SMTP.php";
        require "../view/PHPMailer-master/src/Exception.php";
        $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'minhsangg0311@gmail.com'; // SMTP username
            $mail->Password = 'zsynczfpqywrzkpm';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('minhsangg0311@gmail.com', 'Nguyễn Minh Sang');
            $mail->addAddress($email);
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi lại mật khẩu';
            $noidungthu = "Mật khẩu mới của bạn là: {$matkhaumoi}" ;
            // $noidungthu = 'Mật khẩu mới của bạn là: ".$matkhaumoi."' ;
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo "Mật khẩu mới đã được gửi tới email $email";
        } catch (Exception $e) {
            // echo 'Error: skndsjfhdsjfdsjk', $mail->ErrorInfo;
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2>Quên mật khẩu</h2>
                        <?php if($loi !="") { ?>
                            <div class="alert alert-danger"><?php echo $loi ?></div>
                        <?php } ?> 
                
                        <div class="form-user">
                            <input type="email" name="email" id="" placeholder="Nhập email">
                        </div>
                        <div class="fogot-regsiter">
                            <span><a href="../view/sign.php">Đăng nhập tài khoản</a></span>
                            <span><a href="../model/reset_password.php">Đổi mật khẩu</a></span>
                        </div>

                        <div class="regsiter-sub">
                            <input type="submit" value="Nhận mật khẩu" name="submit" id="">
                            <!-- <span><a href="../model/reset_password.php">Đổi mật khẩu</a></span> -->
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
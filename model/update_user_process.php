<!-- <?php
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
        $hotenmoi = $_POST['hotenmoi'];
        $sdtmoi = $_POST['sdtmoi'];
        $emailmoi = $_POST['emailmoi'];
        $sql = "SELECT * FROM user WHERE name = ? AND sdt = ? AND email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$hotenmoi, $sdtmoi, $emailmoi]);
        // if ($stmt->rowCount()==0) {$loi.= "Nhập sai mật khẩu cũ<br>";}
        // if (!preg_match('/^[A-Za-z0-9]{4,20}$/', $matkhaumoi)) {
        //     $_SESSION["thongbao"] = "Password chỉ chứa số và chữ không quá 20 ký tự!";
        //     header("location:../view/register.php");
        //     die();
        // }
        // if (!preg_match('/^[A-Za-z0-9]{4,20}$/', $hotenmoi)) {$loi.= "Password chỉ chứa số và chữ không quá 20 ký tự! <br>";}
        // if ($matkhaumoi!=$matkhaumoi1) {$loi.= "Nhập đúng mật khẩu cần đổi<br>";}
        if ($loi=="") {
            $sql = "UPDATE user SET name = ? AND sdt = ? AND email = ? WHERE name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$hotenmoi, $sdtmoi, $emailmoi]);
            echo "Đã cập nhật thông tin mới";
        }
    }
?> -->
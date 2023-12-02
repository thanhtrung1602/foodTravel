
<?php 
    session_start();
    ob_start();
    include_once './model/connect.php';
    include_once './model/monan.php';
    include_once './model/comment.php';
    include_once "view/header.php";
    // include_once './model/catalog.php';
    $dishHot =getdishHot();
    $dssp = getdishShow();
    $dssp = getall_dish();
    $kq=getonedm();
    $bill = bill();
    if(isset($_GET['page'])&&($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include_once 'view/home.php';
                break;
            case 'detail':
                if (isset($_GET['id']) && ($_GET['id']>0)) {
                    $id = $_GET['id'];
                    $detail = getId($id);
                };
                if (isset($_POST['addbl'])&&($_POST['addbl'])) {
                    $nameuser=$_POST['nameuser'];
                    $information=$_POST['information'];
                    addbl($nameuser,$information);
                };
                $list=getall_bl();

                $detail = getId($id);
                if (isset($_POST['addbl']) && ($_POST['addbl'])) {
                    $nameuser = $_POST['nameuser'];
                    $information = $_POST['information'];
                    addbl($nameuser, $information);
                    // include_once 'view/detail.php';
                };
            $list = getall_bl();
            $detail = getId($id);
            include_once 'view/detail.php';
            break;
        case 'delCart':
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['cart'], $_GET['ind'], 1);
                header('location:index.php?page=cart');
            }
            break;
        case 'cart':
            include_once 'view/cart.php';
            break;
        case 'addCart':
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            };
            if (isset($_POST['sub']) && ($_POST['sub'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $address = $_POST['address'];
                $sl = 1;
                $sp = [$id, $name, $img, $price, $address, $sl];
                include_once 'view/detail.php';
                break;
            }  
            case 'delCart':
                if (isset($_GET['ind']) && ($_GET['ind']>= 0)) {
                    array_splice($_SESSION['cart'], $_GET['ind'],1);
                    header('location:index.php?page=cart');
                }
                break;
            case 'cart':
                include_once 'view/cart.php';
                break;
            case 'addCart':
                if(!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                };
                if (isset($_POST['sub']) && ($_POST['sub'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $address = $_POST['address'];
                    $sl = 1;
                    $sp = [$id, $name, $img, $price, $address, $sl];

                $_SESSION['cart'][] = $sp;

                header('location:index.php?page=cart');
            }
            // include_once 'view/cart.php';
            break;
        case 'addBill':
            if (isset($_POST['sub']) && (isset($_POST['sub']))) {
                $nameUser = $_POST['nameUser'];
                $phone = $_POST['phone'];
                $addressUser = $_POST['addressUser'];
                $note = $_POST['note'];
                $totalPay = $_POST['totalPay'];
                $id_dish = $_POST['id_dish'];
                addBill($nameUser, $phone, $addressUser, $note, $totalPay, $id_dish);
                header("location: view/bill.php");
            }
            $dssp = getall_dish(1);
            break;
        case 'sign':
            include_once 'view/sign.php';
            break;
        // case 'update_user':
        //     include_once 'view/update_user.php';
        //     break;
        case 'thoat':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);
            header("location: index.php");
            break;
                    header('location:index.php?page=cart');
                
                // include_once 'view/cart.php';
                
                break;
            case 'addBill': 
                if (isset($_POST['sub']) && (isset($_POST['sub']))) {
                    $nameUser = $_POST['nameUser'];
                    $phone = $_POST['phone'];
                    $addressUser = $_POST['addressUser'];
                    $note = $_POST['note'];
                    $totalPay = $_POST['totalPay'];
                    $id_dish = $_POST['id_dish'];
                    $status = $_POST['status'];
                    addBill($nameUser, $phone, $addressUser, $note, $totalPay, $id_dish);
                    header('location:index.php?page=bill');
                }
                $dssp = getall_dish(1);
                break;
            case 'sign':
                include_once 'view/sign.php';
                break;
            case 'bill':
                $bill = bill();
                include_once 'view/bill.php';
                break;
            case 'delbill':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    deleteBill($id);
                }
                include_once 'view/home.php';
                break;
            default:
                $dssp = getall_dish();
                include_once "view/home.php";
                break;

        
            }
    }else{
        include_once "view/home.php";
}
include_once "view/footer.php";
?>

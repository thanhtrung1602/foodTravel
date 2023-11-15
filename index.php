<?php 
    include_once './model/connect.php';
    include_once './model/monan.php';
    include_once "view/header.php";
    $dssp = getall_dish();
    echo var_dump($dssp);
    if(isset($_GET['page'])&&($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include_once 'view/home.php';
                break;
            case 'detail':
                require_once '/view/detail.php';
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
<?php 
    session_start();
    ob_start();
    include_once './model/connect.php';
    include_once './model/monan.php';
    include_once "view/header.php";
    $dish=getall_dish();
    // var_dump($dish);
    if(isset($_GET['pg'])&&($_GET['pg'])) {
        $pg= $_GET['pg'];
        switch ($pg) {
            case 'home':
                include_once "view/home.php";
                break;
            
            default:
            
                break;
        }
    }else{
        include_once "view/home.php";
    }
    include_once "view/footer.php";

    
?>
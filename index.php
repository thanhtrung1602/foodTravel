<?php 
    include_once './model/connect.php';
    include_once './model/monan.php';
    include_once "view/header.php";
    if(isset($_GET['pg'])&&($_GET['pg'])) {
        $pg = $_GET['pg'];
        switch ($pg) {
            case 'value':
                
                break;
            
            default:
            
                break;
        }
    }else{
        include_once "view/home.php";
    }

    include_once "view/footer.php";

    
?>
<?php 
    include_once './model/connect.php';
    include_once './model/monan.php';
    include_once "view/header.php";
    include_once './model/catalog.php';
  
    if(isset($_GET['pg'])&&($_GET['pg'])) {
        $pg = $_GET['pg'];
        switch ($pg) {
            case 'value':
                
                break;
            
            default:
            
                break;  
        }
    }else{
        $result = queryToGetResult();


        include_once "view/home.php";
    }

    include_once "view/footer.php";


    function queryToGetResult() {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM catalog");
        $stmt->execute();
        $kq=$stmt->fetchAll();
        return $kq;

        
        return $kq;
    }

    
?>
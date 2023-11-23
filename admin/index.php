<?php
    session_start();
    ob_start();
    include_once "../model/connect.php";
    include_once "../model/monan.php";
    include_once "view/header.php";
   

    // connectdb();
    if (isset($_GET['pg'])) {
        switch ($_GET['pg']) {
            case 'dish':
                $kq=getall_dish();
                include_once "view/dish.php";
                break;
            case 'deldish':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    deldish($id);
                }
                $kq=getall_dish();
                include_once "view/dish.php";
                break;
            case 'adddish':
                if (isset($_POST['adddish'])&&($_POST['adddish'])) {
                    $id_dish=$_POST['id_dish'];
                    $name_dish=$_POST['name_dish'];
                    $price_dish=$_POST['price_dish'];
                    $img_dish=$_POST['img_dish'];
                    $id_eatery=$_POST['id_eatery'];
                    $id_catalog=$_POST['id_catalog'];
                    adddish($id_dish,$name_dish,$price_dish,$img_dish,$id_eatery,$id_catalog);
                }           
                include_once "view/dish.php";
                break;
            default:    
      
               
                break;
        }
    }else {
        include_once "view/home.php";
        
        
    }
 

    
?>
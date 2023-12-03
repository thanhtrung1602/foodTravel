<?php
    session_start();
    ob_start();
    include_once "../model/connect.php";
    include_once "../model/monan.php";
    include_once "../model/comment.php";
    include_once "../model/catalog.php";
    include_once "../model/user.php";
    include_once "view/header.php";
   

    // connectdb();
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'dish':
                $kq=getall_dish();
                $getalleatery =getall_eatery(); 
                $getallcatalog = getall_dm();        
                include_once "view/dish.php";
                break;
            case 'deldish':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    deldish($id);
                }
                $getalleatery =getall_eatery();  
                $getallcatalog = getall_dm();
                $kq=getall_dish();
                include_once "view/dish.php";
                break;
            case 'adddish':
                if (isset($_POST['adddish'])&&($_POST['adddish'])) {
                    $id_dish=$_POST['id_dish'];
                    $name_dish=$_POST['name_dish'];
                    $price_dish=$_POST['price_dish'];
                    $img_dish=$_POST['img_dish'];
                    $address=$_POST['address'];
                    $id_eatery=$_POST['id_eatery'];
                    $id_catalog=$_POST['id_catalog'];
                    adddish($id_dish,$name_dish,$price_dish,$img_dish,$address,$id_eatery,$id_catalog);
                    // getId_eatery($id_eatery);
                }
                $getalleatery =getall_eatery();  
                $getallcatalog = getall_dm();        
                include_once "view/dish.php";
                break;
            case 'updatedish':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $kqgetone=getone_dish($id);
                    $kq=getall_dish();
                    $getalleatery =getall_eatery();  
                    $getallcatalog = getall_dm();
                    include_once "view/updatedish.php";
                }
                if (isset($_POST['id_dish'])) {
                    $id_dish=$_POST['id_dish'];
                    $name_dish=$_POST['name_dish'];
                    $price_dish=$_POST['price_dish'];
                    $img_dish=$_POST['img_dish'];
                    $address=$_POST['address'];
                    $id_eatery=$_POST['id_eatery'];
                    $id_catalog=$_POST['id_catalog'];
                    updatedish($id_dish,$name_dish,$price_dish,$img_dish,$address,$id_eatery,$id_catalog);
                    $kq=getall_dish();
                    $getalleatery =getall_eatery();  
                    $getallcatalog = getall_dm();
                    include_once "view/dish.php";
                }
                break;
            case 'comment':
                $kq=getall_bl();
                include_once "view/comment.php";
                break;
            case 'delbl':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    delbl($id);
                }
                $kq=getall_bl();
                include_once "view/comment.php";
                break;
            case 'user':
                $kq=getall_user();
                include_once "view/user.php";
                break;
            case 'deluser':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    deluser($id);
                }
                $kq=getall_user();
                include_once "view/user.php";
                break;
            case 'catalog':
                $kq=getall_dm();

                include_once "view/catalog.php";
                break;

            case 'adddm':
                
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendm=$_POST['tendm'];
                    themdm($tendm);
                }
                $kq=getall_dm();

                    include_once "view/catalog.php";
                break;
            case 'deletedm':
                if (isset($_GET['id'])) {
                     $id=$_GET['id'];
                     deletedm($id);
                }
                $kq=getall_dm();
    
                include_once "view/catalog.php";
                break;   

            case 'updatedmform':
                //lấy 1 record đúng vs id truyền vào
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $kqone=getonedm($id);
                        //cần 1 ds 
                $kq=getall_dm();
                include_once "view/updatedmform.php";
                }
                if(isset($_POST['id'])){
                $id=$_POST['id'];
                $tendm=$_POST['tendm'];
                updatedm($id,$tendm);
                $kq=getall_dm();
                include_once "view/catalog.php";
                }

                break;   
              

            default:    
      
               
                break;
        }
    }else {
        include_once "view/home.php";
        
        
    }
 

    
?>
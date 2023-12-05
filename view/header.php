<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./layout/assets/reset.css">
    <link rel="stylesheet" href="./layout/assets/style.css">
    <link rel="stylesheet" href="./layout/base/responsive.css">
    <link rel="stylesheet" href="./layout/detail/detail.css">
    <link rel="stylesheet" href="./layout/bill/bill.css">
    <link rel="stylesheet" href="./layout/shoppingCart/shoppingCart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="layout/base/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <!-- Sang -->
        <header>
            <div class="header">
                <a href="index.php?page=home"><img class="logo" src="layout/img/logo/logo_main.png" alt=""></a>
                <div class="select-container">
                    <select name="" id="" class="select-box">
                        <option value="">Khu Vực</option>
                        <option value="">TP. Hồ Chí Minh</option>
                        <option value="">Hà Nội</option>
                        <option value="">Đà Nẵng</option>
                        <option value="">Vũng Tàu</option>
                        <option value="">Đà Lạt</option>
                        <option value="">Nha Trang</option>
                        <option value="">Cần Thơ</option>
                    </select>
                    <!-- <div class="icon-container">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div> -->
                </div>
                <div class="box-food-hot">
                    <div class="foo-hot">Món ăn HOT</div>
                    <div class="icon-food-hot">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                </div>
                <div class="input-seach">
                    <input type="text" placeholder="Địa điểm, món ăn,...">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </div>
                <?php
                    if(isset($_SESSION['username']) && ($_SESSION['username']!="")) {
                        // echo '<a href="view/update_user.php"><span>'.$_SESSION['username'].'</span></a>';
                        echo '<div class="dangky"><div class="text-dangky"><a href="view/update_user.php"><span>'.$_SESSION['username'].'</span></a></div></div>';
                        echo '<div class="dangky"><div class="text-dangky"><a href="index.php?page=thoat"><span>Đăng xuất</span></a></div></div>';
                    } else {
                ?>
                <div class="dangky">
                    <div class="text-dangky">
                        <a href="view/sign.php"><span>Đăng nhập</span></a>
                    </div>
                </div>
                <?php }?>
                <div class="icon-sign-in">
                    <a href="index.php?page=cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    
                    <i class="fa-solid fa-bell" ></i>
                </div>
                <div class="hr">
                    
                </div>
                <div class="quoc-ki">
                    <img src="layout/img/logo/quoc-kyVN.png" alt="">
                    <!-- <img src="layout/img/logo/quoc-ki-vuong-quoc-anh.jpg" alt=""> -->
                </div> 
            </div> 
        </header>
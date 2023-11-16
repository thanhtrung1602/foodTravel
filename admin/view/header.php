<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="view/layout/css/admin.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../img/logo/logo_main.png" alt="">
        </div>
        <ul class="menu">
            <li>
                <a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="index.php?pg=dish">
                    <ion-icon name="fast-food-outline"></ion-icon>
                    <span>Món ăn</span>
                </a>
            </li>
            <li>
                <a href="index.php?pg=catalog">
                    <ion-icon name="library-outline"></ion-icon>
                    <span>Loại</span>
                </a>
            </li>
            <li>
                <a href="index.php?pg=user">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <span>Khách hàng</span>
                </a>
            </li>
            <li>
                <a href="index.php?pg=comment">
                    <ion-icon name="chatbox-outline"></ion-icon>
                    <span>Bình luận</span>
                </a>
            </li>
            <li>
                <a href="index.php?pg=Thống kê">
                    <ion-icon name="cellular-outline"></ion-icon>
                    <span>Thống kê</span>
                </a>
            </li>
            <li class="logout">
                <a href="index.php?pg=out" >
                    <ion-icon name="exit-outline"></ion-icon>
                    <span>Thoát</span>
                </a>
            </li>
        </ul>
    </div>
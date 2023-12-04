<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="view/layout/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../layout/img/logo/logo_main.png" alt="">
        </div>
        <ul class="menu">
            <li>
                <a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=dish">
                    <ion-icon name="fast-food-outline"></ion-icon>
                    <span>Món ăn</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=catalog">
                    <ion-icon name="library-outline"></ion-icon>
                    <span>Loại</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=user">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <span>Khách hàng</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=comment">
                    <ion-icon name="chatbox-outline"></ion-icon>
                    <span>Bình luận</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=Thốngkê">
                    <ion-icon name="cellular-outline"></ion-icon>
                    <span>Thống kê</span>
                </a>
            </li>
            <li class="logout">
                <a href="index.php?page=out" >
                    <ion-icon name="exit-outline"></ion-icon>
                    <span>Thoát</span>
                </a>
            </li>
        </ul>
    </div>
    
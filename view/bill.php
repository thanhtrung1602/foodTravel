<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/bill/bill.css">
    <link rel="stylesheet" href="./bill.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./base/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/layout/assets/reset.css">
    <title>Document</title>
</head>
<body>
    <!-- <main>
        <div class="bill-food">
            <div class="top-header">
                <span><i class="fa-solid fa-bag-shopping"></i></span>
                <span>ĐẶT HÀNG THÀNH CÔNG</span>
            </div>
    
            <div class="top-next">
                Cảm ơn anh <strong class="bold-text">Trung</strong> đã cho Travelfood được phục vụ
            </div>
            
            <div class="middle-top">
                <div class="head-middle">
                    <span>Đơn hàng: </span>
                    <span>Quản lý đơn hàng | <a href="">Hủy</a></span>
                </div>
    
                <div class="mid-middle">
                    <span class="bold-text">Người nhận hàng: </span>
                    <span>Anh Trung, 0822930906</span>
                </div>
    
                <div class="address-middle">
                    <span class="bold-text">Giao đến: </span>
                    <span>Thôn Tân Sơn, Xã Eadrong, Huyện CưMgar, Đăk Lăk</span>
                </div>
    
                <div class="foo-middle">
                    <span class="bold-text">Tổng tiền: </span>
                    <span class="total-bill">100</span>
                </div>
            </div>
    
            <div class="footer-mid">
                <span>Đơn hàng chưa được thanh toán</span>
            </div>
    
            <div class="footer-bill">
                <h2>Chọn hình thức thanh toán: </h2>
                <div class="pay-bill">
                    <input type="radio" name="" id=""> <label for=""> <i class="fa-solid fa-money-bill"></i> Thanh toán tiền mặt khi nhận hàng</label>
                </div>
            </div>
    
            <input type="submit" value="XÁC NHẬN" class="sub-bill">
        </div>
    </main> -->
    <main>
        <?php
        include_once "../model/monan.php";
        include_once "../model/connect.php";
        $bill = bill();
            foreach($bill as $item) {
                extract($item);
                    echo '
                        <div class="bill-food">
                            <div class="top-header">
                                <span><i class="fa-solid fa-bag-shopping"></i></span>
                                <span>ĐẶT HÀNG THÀNH CÔNG</span>
                            </div>
                    
                            <div class="top-next">
                                Cảm ơn anh <span class="bold-text">'.$nameUser.'</span> đã cho Travelfood được phục vụ
                            </div>
                            
                            <div class="middle-top">
                                <div class="head-middle">
                                    <span>Đơn hàng: '.$id.'</span>
                                    <span>Quản lý đơn hàng | <a href="">Hủy</a></span>
                                </div>
                    
                                <div class="mid-middle">
                                    <span class="bold-text">Người nhận hàng: </span>
                                    <span>'.$nameUser.', '.$phone.'</span>
                                </div>
                    
                                <div class="address-middle">
                                    <span class="bold-text">Giao đến: </span>
                                    <span>'.$addressUser.'</span>
                                </div>
                    
                                <div class="foo-middle">
                                    <span class="bold-text">Tổng tiền: </span>
                                    <span class="total-bill">'.$totalPay.'</span>
                                </div>
                            </div>
                    
                            <div class="footer-mid">
                                <span>Đơn hàng chưa được thanh toán</span>
                            </div>
                    
                            <div class="footer-bill">
                                <h2>Chọn hình thức thanh toán: </h2>
                                <div class="pay-bill">
                                    <input type="radio" name="" id=""> <label for=""> <i class="fa-solid fa-money-bill"></i> Thanh toán tiền mặt khi nhận hàng</label>
                                </div>
                            </div>
                    
                            <input type="submit" value="XÁC NHẬN" class="sub-bill">
                        </div>
                    ';
            }
        ?>
    </main>

</body>
</html>

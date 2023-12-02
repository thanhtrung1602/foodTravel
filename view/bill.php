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
    <main>
        <?php 
            foreach($bill as $item) {
                extract($item);
                    echo '
                        <div class="bill-prod">
                            <div class="bill-food">
                                <div class="top-header">
                                    <span><i class="fa-solid fa-bag-shopping"></i></span>
                                    <span>ĐẶT HÀNG THÀNH CÔNG</span>
                                </div>
                        
                                <div class="top-next">
                                    Cảm ơn anh <span class="bold-text">'.$nameUser.'</span> đã cho Travelfood được phục vụ
                                </div>

                                <div class="del-bill">
                                    <form class="form-del__bill" action="index.php?page=delbill&id='.$id.'" method="post" enctype="multipart/form-data">
                                        <span class="close-bill"><i class="fa-solid fa-xmark"></i></span>
                                        <h3>Vui lòng chia sẻ lý do anh <span>'.$nameUser.'</span> muốn hủy đơn hàng này: </h3>
                                        <div class="reason-bill">
                                            <div class="false-sdt">
                                                <input type="checkbox" name="" id="" class="del-check__bill"> <label for="">Sai số điện thoại</label>
                                            </div>
                        
                                            <div class="false-info">
                                                <input type="checkbox" name="" id="" class="del-check__bill"> <label for="">Sai thông tin địa chỉ</label>
                                            </div>
                        
                                            <div class="false-other">
                                                <input type="checkbox" name="" id="" class="del-check__bill"> <label for="">Vấn đề khác</label>
                                            </div>
                                        </div>
                        
                                        <input type="submit" value="Xác nhận" class="send-del--bill">
                                    </form>
                                </div>

                                <div class="successBill">
                                    <form action="index.php?page=home" class="pos-bill" method="post">
                                        <div class="form-success">
                                            <div class="success-img">
                                                <img src="layout/img/issuccessImg/popup.png" alt="">
                                            </div>
                                        </div>
                                        <input type="submit" value="Đóng" class="close-done">
                                    </form>
                                </div>
                                
                                <div class="middle-top">
                                    <div class="head-middle">
                                        <span>Đơn hàng: '.$id.'</span>
                                        <span>Quản lý đơn hàng | <a href="" class="cancel-bill">Hủy</a></span>
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
                                    <span class="pad-bill">Đơn hàng chưa được thanh toán</span>
                                </div>
                        
                                <div class="footer-bill">
                                    <h2>Chọn hình thức thanh toán: </h2>
                                    <div class="pay-bill">
                                        <input type="checkbox" class="pay-bill" name="" id=""> <label for=""> <i class="fa-solid fa-money-bill"></i> Thanh toán tiền mặt khi nhận hàng</label>
                                    </div>
                                </div>
                        
                                <input type="submit" value="XÁC NHẬN" class="sub-bill">
                            </div>
                        </div>
                    ';
            }
        ?>
    </main>

</body>
    <script>
        const checkedBoxs = document.querySelectorAll('input[type="checkbox"]');
        const subCheck = document.querySelector('.send-del--bill');
        const closeBill =  document.querySelector('.close-bill')
        const delbill = document.querySelector('.del-bill');
        const cancelBill = document.querySelector('.cancel-bill');
        const subBill = document.querySelector('.sub-bill');
        const successBill = document.querySelector('.successBill')
        // xử lý mở success 
        subBill.onclick = function () {
            successBill.style.display = 'block';
        }
        //xử lý bật boxcheck 
        cancelBill.onclick = function () {
            delbill.style.display = 'block';
            event.preventDefault();
        }
        // xử lý click boxcheck
        console.log(checkedBoxs)
        checkedBoxs.forEach(function (checkedBox) {
            console.log(this)
            checkedBox.onclick = function () {
                const atLeastOneChecked = [...checkedBoxs].some(function (box) {
                    return box.checked;
                })
                subCheck.style.display = atLeastOneChecked ? 'block' : 'none';
            }
        })
        // xử lý đóng box
        closeBill.onclick = function () {
            delbill.style.display = 'none'
        }
    </script>
</html>

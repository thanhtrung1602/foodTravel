<!-- <style>
    .quality {
        display: flex;
        border: none;
        justify-content: space-between;
        text-align: center;
        align-items: center;
    } -->

    <!-- .plus {
        margin: 0;
    }
</style> -->

<?php
    if (isset($_SESSION['cart'])){
        // echo var_dump($_SESSION['cart']);
?>
<nav>
    <section class="navbar">
        <article>
            <table>
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <?php
                    $i = 0;
                    $tong = 0;
                    foreach($_SESSION['cart'] as $sp) {
                        // extract($sp);
                        $thanhtien = $sp[3] * $sp[5];
                        $tong += $thanhtien;
                        $linkDel = 'index.php?page=delCart&ind='.$i;
                        $currentProductId = $sp[0]; 
                        echo '
                            <tbody>
                                <tr>
                                    <td><h2>'.$sp[1].'</h2></td>
                                    <td><img src="layout/img/sanpham/'.$sp[2].'" alt=""></td>
                                    <td class="quality">
                                        <span class="numQuality">'.$sp[5].'</span>
                                    </td>
                                    <td><span class="total">'.number_format($thanhtien).'</span></td>
                                    <td><a href="'.$linkDel.'"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                            ';
                            $i++;
                        }
                        ?>
                </table>
        </article>
    </section>
</nav>
<main>
    <section class="main">
        <article>
            <div class="form-address">
                
                <h2>Thông tin nhận hàng</h2>

                <form action="index.php?page=addBill" method="post" enctype="multipart/form-data">
                    <div class="sex">
                        <div class="male">
                            <input type="radio" name="sex" id=""> 
                            <label for="">Giao tận nhà</label>
                        </div>
    
                        <div class="female">
                            <input type="radio" name="sex" id="">
                            <label for="">Lấy tại cửa hàng</label>
                        </div>
                    </div>
                    <div class="form-inp">
                        <div class="name-voucher">
                            <input type="text" name="nameUser" id="nameUser" placeholder="Họ và tên" class="nameUser">
                            <input type="text" name="" id="" placeholder="Nhập voucher">
                        </div>
    
                        <div class="form-middle">
                            <div class="left-inp">
                                <input type="text" name="phone" id="" placeholder="Số điện thoại" class="phone">
                                <input type="text" name="addressUser" id="" placeholder="Nhập địa chỉ nhà, tên đường" class="addressUser">
                                <input type="text" name="note" id="" placeholder="Nhập ghi chú nếu có" class="note">
                            </div>
    
                            <div class="right-total">
                                <div class="food-price">
                                    <span>Tiền món ăn</span>
                                    <span>30.000 VND</span>
                                </div>
    
                                <div class="food-transport">
                                    <span>Vận chuyển: </span>
                                    <span>20.000 VND</span>
                                </div>
    
                                <div class="food-voucher">
                                    <span>Voucher</span>
                                    <span>-20.000 VND</span>
                                </div>
    
                                <div class="food-total">
                                    <span>Tổng</span>
                                    <span><?=number_format($tong,0,",",".")?></span>
                                </div>
    
                            </div>
                        </div>
                        <input type="hidden" name="totalPay" value="<?=$tong?>">
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="id_dish" value="<?=$currentProductId?>">
                        <input type="submit" value="Đặt hàng" name="sub" class="order">
                    </div>
                </form>
            </div>
        </article>
    </section>
</main>
<script src="layout/shoppingCart/shoppingCart.js"></script>
<!-- <script>
    const  $ = document.querySelector.bind(document);
    let sl = $('.num-item');
    let plus = $('.plus');
    let minus = $('.minus');
    sl = 1;
    plus.onclick = function () {
        Number()
        sl ++;
        let total = $('.total');

        
        $('.numQuality').innerHTML = sl;
        console.log(sl)
        console.log(this)
    }

    minus.onclick = function () {
        sl --;
        $('.numQuality').innerHTML = sl;
    }
</script> -->
<?php
    }
?>
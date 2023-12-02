<?php
    if (isset($detail)) {
        extract($detail);
        // var_dump($detail);
    }
    // var_dump($detail);
?>
        <!-- Trung, Huy -->
        <nav>
            <section class="navbar">
                <article>
                    <div class="nav">
                        <div class="nav-left">
                            <img src="layout/img/sanpham/<?=$img?>" alt="">
                        </div>
    
                        <div class="nav-right">
                            <div class="nav-top">
                                <h2><?=$name?></h2>
                                <span><?=$address?></span>
                            </div>
    
                            <div class="nav-middle">
                                <div class="btn-right">Mở cửa</div>
                                <div class="btn-left">Đóng cửa</div>
                            </div>
    
                            <div class="nav-price">
                                <span><?=$price?></span>
                            </div>
    
                            <div class="nav-bottom">
                                <form action="index.php?page=addCart" method="post">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input type="hidden" name="img" id="" value="<?=$img?>">
                                    <input type="hidden" name="name" id="" value="<?=$name?>">
                                    <input type="hidden" name="address" id="" value="<?=$address?>">
                                    <input type="hidden" name="price" id="" value="<?=$price?>">
                                    <input type="submit" name="sub" value="Đặt hàng"  class="order">
                                </form>
                                <p>Thanh toán online giảm 50k từ đơn 150k</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </nav>
        <main>
            <section class="main">
                <article>
                    <h2>Các món bạn cũng sẽ thích</h2>
                    <div class="food">
                        <ul class="food-ul flex-box">
                            <li class="food-item">
                                <a href="">
                                    <div class="food-travel">
                                        <div class="food-img">
                                            <img src="layout/img/sanpham/com-chien.jpeg" alt="">
                                        </div>
                                        <div class="food-name">
                                            <span>Cơm chiên nước mắt</span>
                                        </div>
                                        <div class="food-price">
                                            <span>35,000 VND</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="food-item">
                                <a href="">
                                        <div class="food-travel">
                                        <div class="food-img">
                                            <img src="layout/img/sanpham/com-chien.jpeg" alt="">
                                        </div>
                                        <div class="food-name">
                                            <span>Cơm chiên nước mắt</span>
                                        </div>
                                        <div class="food-price">
                                            <span>35,000 VND</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="food-item">
                                <a href="">
                                        <div class="food-travel">
                                        <div class="food-img">
                                            <img src="layout/img/sanpham/com-chien.jpeg" alt="">
                                        </div>
                                        <div class="food-name">
                                            <span>Cơm chiên nước mắt</span>
                                        </div>
                                        <div class="food-price">
                                            <span>35,000 VND</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="food-item">
                                <a href="">
                                        <div class="food-travel">
                                        <div class="food-img">
                                            <img src="layout/img/sanpham/com-chien.jpeg" alt="">
                                        </div>
                                        <div class="food-name">
                                            <span>Cơm chiên nước mắt</span>
                                        </div>
                                        <div class="food-price">
                                            <span>35,000 VND</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="comment">
                        <h2>Đánh giá</h2>
                        <div class="comment-detail">
                            <div class="writer-comment">
                                <div class="inp-avatar">
                                    <!-- <img src="layout/img/avatar-user/tom jack.jpg" alt=""> -->
                                </div>
                                <div class="inp-name">
                                <form action="index.php?page=detail&id=<?=$id?>" method="post">
                                    <div>
                                        <h4>Tên khách Hàng: </h4>
                                        <input type="text" name="nameuser" class="name-cmt">
                                        <h4>Nội dung: </h4>
                                        <input type="text" name="information" class="info-cmt">
                                        <input type="submit" name="addbl" value="Đăng" class="sub-cmt">
                                    </div>
                                </form>
                                </div>
                            </div>
                            <?php
                                foreach ($list as $item) {
                                    extract($item);
                                    echo '<div class="done-comment">
                                            <div class="inp-avatar">
                                                <!-- <img src="layout/img/avatar-user/tom jack.jpg" alt=""> -->
                                            </div>
                                            <div class="inp-name">
                                                <div class="name-comment">
                                                    <span><strong>'.$nameuser.'</strong></span>
                                                </div>
                
                                                <div class="inp-comment">
                                                    <p>'.$information.'</p>
                                                </div>
            
                                                <div class="time-comment">
                                                    <span>1 ngày trước</span>
                                                    <span><i class="fa-solid fa-thumbs-up"></i></span>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            ?>                  
                        </div>
                    </div>
                </article>
            </section>
        </main>
        <script>
            const nameCmt = document.querySelector('.name-cmt');
            const infoCmt = document.querySelector('.info-cmt');
            const subCmt = document.querySelector('.sub-cmt');

            subCmt.onclick = function () {
                if(nameCmt.value == "") {
                    nameCmt.focus();
                    event.preventDefault();
                    alert('bạn chưa nhập tên của mình')
                } else if (infoCmt.value == "") {
                    infoCmt.focus();
                    event.preventDefault();
                    alert('bạn chưa nhập thông tin bình luận')
                } else {

                }
            }
        </script>
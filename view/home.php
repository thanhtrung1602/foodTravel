    <div id="app"> 
    <!-- Trung, Huy -->
            <div class="banner">
                <section class="banner-section">
                    <article>
                        <img src="layout/img/banner/banner.png" alt="bannerFoodTravel" loading="lazy">
                    </article>
                </section>
            </div>
            <nav>
                <section class="navbar">
                    <article class="navbar-article">
                        <div class="category">

                        <ul class="category-ul">
                        <li class="category-ul__list">
                                    <a href="">Tất cả</a>
                                </li>


            <?php 
                foreach ($kq as $item){
                extract($item);
                    echo '<li class="category-ul__list">
                    <a href="">'.$tendm.'</a>
                </li>';
                }
                
            ?>
        </ul>


                        <!-- <ul class="category-ul">
                           
                            <li class="category-ul__list">
                                <a href="">Đồ ăn</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Đồ uống</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Đồ chay</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Tráng miệng</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Bánh kem</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Món lẩu</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Đồ ăn nhanh</a>
                            </li>
                            <li class="category-ul__list">
                                <a href="">Phở</a>
                            </li>
                        </ul> -->
                    </div>

                <div class="nav-product">
                    <div class="products">
                    <ul class="product-ul flex-box">
                                <?php
                                    $kq="";
                                        foreach ($dssp as $item) {
                                        extract($item);
                                        $linkdetail='index.php?page=detail&id='.$id;
                                        $kq.='<li class="product-ul__item">
                                                <div class="product-top">
                                                    <a href="'.$linkdetail.'">
                                                        <div class="product-img">
                                                            <img src="layout/img/sanpham/'.$img.'" alt="product com chien" loading="lazy">
                                                        </div>
                                                        <div class="product-name__adress">
                                                            <span>'.$name.'</span>
                                                            <p>'.$address.'</p>
                                                        </div>
                                                    </a>
                                                        <div class="user-comment">
                                                            <div class="comment-right">
                                                                <div class="user-commet__name">
                                                                    <span>Nguyễn Thành Trung</span>
                                                                </div>
                                                                <div class="user-comment__title">
                                                                    <span>Món bún đậu này tôi thấy không đúng như là họ nói bùn nhiều mà thịt cũng nhiều</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-evaluate flex-box">
                                                        </div>
                                                    </div>
                                            </li>';
                                    }
                                    echo $kq;
                                ?>
                            </ul>
                    </div>
                </div>
                <article>
            </section>
        </nav>
        <main>
            <section class="main">
                <article>
                    <div class="main-nation">
                        <div class="heading">
                            <h2>Quốc gia</h2>
                        </div>
                        <div class="nation">
                            <ul class="nation-ul flex-box">
                                <li class="nation-item">
                                    <a href="">
                                        <div class="nation-famous">
                                            <img class="nation-img" src="layout/img/quocgia/banh-mi.jpg" alt="">
                                            <div class="nation-text">
                                                <span>Việt Nam</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nation-item">
                                    <a href="">
                                        <div class="nation-famous">
                                            <img class="nation-img" src="layout/img/quocgia/kim-chi.jpeg" alt="">
                                            <div class="nation-text">
                                                <span>Hàn Quốc</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nation-item">
                                    <a href="">
                                        <div class="nation-famous">
                                            <img class="nation-img" src="layout/img/quocgia/lau-tu-xuyen.jpeg" alt="">
                                            <div class="nation-text">
                                                <span>Trung Quốc</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nation-item">
                                    <a href="">
                                        <div class="nation-famous">
                                            <img class="nation-img" src="layout/img/quocgia/sasimi.jpeg" alt="">
                                            <div class="nation-text">
                                                <span>Nhật Bản</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="heading-2">
                        <h2>Tin tức món ăn trending</h2>
                    </div>
                    <div class="main-news">
                            <div class="news">
                                <a href="">
                                    <div class="new-img">
                                        <img src="layout/img/sanpham/banh-dong-xu.jpg" alt="">
                                    </div>
                                    <div class="new-title">
                                        <h3>Bánh đồng xu phô mai đang hot ”Rần rần” hiện nay</h3>
                                    </div>
                                    <div class="new-describe">
                                        <span>Bánh đồng xu phô mai Hàn Quốc (hay còn gọi là bánh 10 won) đang tạo nên “cơn sốt” thu hút sự quan tâm của nhiều người, đặc biệt là giới trẻ. Chiếc bánh có hình dạng đồng xu lạ mắt, bên....</span>
                                    </div>
                                </a>
                            </div>

                            <div class="news">
                                <a href="">
                                    <div class="new-img">
                                        <img src="layout/img/sanpham/banh-dong-xu.jpg" alt="">
                                    </div>
                                    <div class="new-title">
                                        <h3>Bánh đồng xu phô mai đang hot ”Rần rần” hiện nay</h3>
                                    </div>
                                    <div class="new-describe">
                                        <span>Bánh đồng xu phô mai Hàn Quốc (hay còn gọi là bánh 10 won) đang tạo nên “cơn sốt” thu hút sự quan tâm của nhiều người, đặc biệt là giới trẻ. Chiếc bánh có hình dạng đồng xu lạ mắt, bên....</span>
                                    </div>
                                </a>
                            </div>

                            <div class="news">
                                <a href="">
                                    <div class="new-img">
                                        <img src="layout/img/sanpham/banh-dong-xu.jpg" alt="">
                                    </div>
                                    <div class="new-title">
                                        <h3>Bánh đồng xu phô mai đang hot ”Rần rần” hiện nay</h3>
                                    </div>
                                    <div class="new-describe">
                                        <span>Bánh đồng xu phô mai Hàn Quốc (hay còn gọi là bánh 10 won) đang tạo nên “cơn sốt” thu hút sự quan tâm của nhiều người, đặc biệt là giới trẻ. Chiếc bánh có hình dạng đồng xu lạ mắt, bên....</span>
                                    </div>
                                </a>
                            </div>
                    </div>
                </article>
            </section>
        </main>
        <!-- Tuan -->
    </div>

<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h1>Món ăn</h1>
            </div>
            <div class="user--info">
                <div class="box-search">
                    <input type="text" placeholder="Tìm Kiếm">
                </div>
                <img src="../img/avatar-user/tom.jfif" alt="">
            </div>
        </div>
        <div class="main--wrapper">
            <div class="table--container">
                <table class="form--nhap">
                    <thead>
                        <tr>
                            <form action="index.php?page=adddish" method="post">
                                <th><h4>Mã: </h4>
                                <input type="text" name="id_dish"></th>                              
                                <th> <h4>Tên: </h4>
                                <input type="text" name="name_dish"> </th>
                                <th><h4>Giá: </h4>
                                <input type="text" name="price_dish"></th>
                                <th><h4>Hình: </h4>
                                <input type="file" name="img_dish"> <br></th>
                                <th><h4>Mã quán: </h4>
                                <input type="text" name="id_eatery"></th>
                                <th><h4>Mã loại: </h4>
                                <input type="text" name="id_catalog"></th>
                                <th><h4>Thêm: </h4>
                                <input type="submit" name="adddish" value="Thêm"></th></th>     
                            </form>
                        </tr>
                    </thead>
                </table> 
                <table>
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th>Mã quán</th>
                            <th>Mã loại</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (isset($kq)&&(count($kq)>0)) {
                                foreach ($kq as $item) {
                                    extract($item);
                                    echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$price.'</td>
                                            <td><img class="img--dish" src="../img/sanpham/'.$img.'" alt=""></td>
                                            <td>'.$id_eatery.'</td>
                                            <td>'.$id_catalog.'</td>
                                            <td><a href ="index.php?page=updatedish&id='.$id.'"><ion-icon name="hammer-outline"></ion-icon></a> | <a href="index.php?page=deldish&id='.$id.'"><ion-icon name="trash-outline"></ion-icon></a></td>
                                        </tr>';
                                }
                            }    
                        ?>
                </table>
            </div>
            </tbody> 
        </div>
    </div>
</body>
</html>
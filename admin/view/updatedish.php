
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h1>Sửa</h1>
                <?php
                    // var_dump($kqgetone);
                ?>
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
                            <form action="index.php?pg=updatedish" method="post">
                                <th><h4>Mã: </h4>
                                <input type="hidden" name="id_dish" value="<?=$kqgetone [0]['id']?>"></th>                              
                                <th> <h4>Tên: </h4>
                                <input type="text" name="name_dish" value="<?=$kqgetone [0]['name']?>"> </th>
                                <th><h4>Giá: </h4>
                                <input type="text" name="price_dish" value="<?=$kqgetone [0]['price']?>"></th>
                                <th><h4>Hình: </h4>
                                <input type="file" name="img_dish" value="<?=$kqgetone [0]['img']?>"> <br></th>
                                <th><h4>Mã quán: </h4>
                                <input type="text" name="id_eatery" value="<?=$kqgetone [0]['id_eatery']?>"></th>
                                <th><h4>Mã loại: </h4>
                                <input type="text" name="id_catalog" value="<?=$kqgetone [0]['id_catalog']?>"></th>
                                <th><h4>Thêm: </h4>
                                <input type="submit" name="capnhat" value="Cập nhật"></th></th>     
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
                                            <td><a href ="index.php?pg=updatedish&id='.$id.'"><ion-icon name="hammer-outline"></ion-icon></a> | <a href="index.php?pg=deldish&id='.$id.'"><ion-icon name="trash-outline"></ion-icon></a></td>
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
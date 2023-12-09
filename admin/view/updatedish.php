<?php
    $nameeatery='';
    foreach ($getalleatery as $item) {
        extract($item);
        $nameeatery .= "<option value='" . $id . "'>" . $name . "</option>";
    }
    $namecatalog='';
    foreach ($getallcatalog as $item) {
        extract($item);
        $namecatalog .= "<option value='" . $id . "'>" . $tendm . "</option>";
    }
    ?>
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
                <img src="../layout/img/avatar-user/tom.jfif" alt="">
            </div>
        </div>
        <div class="main--wrapper">
            <div class="table--container">
                <table class="form--nhap">
                    <thead class="uppdate">
                        <tr>
                            <form action="index.php?page=updatedish" method="post">
                                <!-- <h4>Mã: </h4> -->
                                <input type="hidden" name="id_dish" value="<?=$kqgetone [0]['id']?>">                              
                                 <h4>Tên: </h4>
                                <input type="text" name="name_dish" value="<?=$kqgetone [0]['name']?>"> 
                                <h4>Giá: </h4>
                                <input type="text" name="price_dish" value="<?=$kqgetone [0]['price']?>">
                                <h4>Hình: </h4>
                                <input type="file" name="img_dish" value="<?=$kqgetone [0]['img']?>"> <br>
                                <h4>Địa chỉ: </h4>
                                <input type="text" name="address" value="<?=$kqgetone [0]['address']?>">
                                <h4>MTên quán: </h4>
                                    <select name="id_eatery">
                                        <?= $nameeatery ?>
                                    </select>
                                <!-- <input type="text" name="id_eatery" value="<?=$kqgetone [0]['id_eatery']?>"> -->
                                <h4>Tên loại: </h4>
                                    <select name="id_catalog">
                                        <?= $namecatalog ?>
                                    </select>
                                <!-- <input type="text" name="id_catalog" value="<?=$kqgetone [0]['id_catalog']?>"> -->
                                <h4>Thêm: </h4>
                                <input type="submit" name="capnhat" value="Cập nhật">   
                            </form>
                        </tr>
                    </thead>
                </table> 
                <!-- <table>
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
                </table> -->
            </div>
            </tbody> 
        </div>
    </div>
</body>
</html>
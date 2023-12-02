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
                <h1>Món ăn</h1>
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
                    <thead>
                        
                            <form action="index.php?page=adddish" method="post">
                                <tr><th><h4>Mã: </h4>
                                    <input type="text" name="id_dish"></th>                              
                                    <th> <h4>Tên: </h4>
                                    <input type="text" name="name_dish"> </th>
                                    <th><h4>Giá: </h4>
                                    <input type="text" name="price_dish"></th>
                                    <th><h4>Hình: </h4>
                                    <input type="file" name="img_dish"> <br></th></tr>
                                <tr><th><h4>Địa chỉ: </h4>
                                    <input type="text" name="address"></th>
                                    <th><h4>Tên quán</h4>
                                    <select name="id_eatery">
                                        <?= $nameeatery ?>
                                    </select>
                                    <!-- <input type="text" name="id_eatery"></th> -->
                                    <th><h4>Tên loại: </h4>
                                    <select name="id_catalog">
                                        <?= $namecatalog ?>
                                    </select>
                                    <!-- <input type="text" name="id_catalog"></th> -->
                                    <th><h4>Thêm: </h4>
                                    <input type="submit" name="adddish" value="Thêm"></th></th>    </tr> 
                            </form>
                        
                    </thead>
                </table> 
                <table>
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Hình</th>
                            <th>Địa chỉ</th>
                            <th>Tên quán</th> 
                            <th>Tên loại</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (isset($kq)&&(count($kq)>0)) {
                                foreach ($kq as $item) {
                                    extract($item);
                                    $getone_eatery = getId_eatery($id_eatery);
                                    $getone_catalog = getId_catalog($id_catalog);
                                    echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$price.'</td>
                                            <td><img class="img--dish" src="../layout/img/sanpham/'.$img.'" alt=""></td>
                                            <td>'.$address.'</td>
                                            <td>'.$getone_eatery['name'].'</td>
                                            <td>'.$getone_catalog['tendm'].'</td>
                                            <td><a href ="index.php?page=updatedish&id='.$id.'">Sửa</a> | <a href="index.php?page=deldish&id='.$id.'">Xóa</a></td>
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
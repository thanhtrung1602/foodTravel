<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h1>Bình luận</h1>
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
                <table>
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên Khách Hàng</th>
                            <th>Nội dung</th>
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
                                            <td>'.$nameuser.'</td>
                                            <td>'.$information.'</td>
                                            <td><a href="index.php?page=delbl&id='.$id.'">Xóa</a></td>
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
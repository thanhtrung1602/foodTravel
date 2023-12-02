
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h1>Danh Mục</h1>
            </div>
            <div class="user--info">
                <div class="box-search">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text" placeholder="Tìm Kiếm">
                </div>
                <img src="../layout/img/avatar-user/tom.jfif" alt="">
            </div>
        </div>
        <div class="main--wrapper">
            <div class="table--container">  
            <form action="index.php?page=adddm" method="post">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
                <table>     
                    <thead>
                    <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($kq)&&(count($kq)>0)){
                                $i=1;
                                foreach ($kq as $dm){
                                    echo '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$dm['tendm'].'</td>
                                        <td>'.$dm['uutien'].'</td>
                                        <td>'.$dm['hienthi'].'</td>
                                        <td><a href="index.php?page=updatedmform&id='.$dm['id'].'">Sửa</a>|<a href="index.php?page=deletedm&id='.$dm['id'].'">Xóa</a></td>
                                    </tr>';
                                $i++;
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
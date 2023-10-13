<div class="row">
            <div class="row mb10 frmtitle">
                <h1>Danh sách loại hàng</h1>

            </div> 
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">"'.$name.'"</option>';
                            }
                        ?>
                </select>
                <input type="submit" name="listok" value="GO">
            </form>

            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row mb10 formdanhsachloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Lượt xem</th>
                                <th></th> 
                            </tr>   
                            <?php 
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp = "index.php?act=suasp&id=".$id;
                                    $xoasp = "index.php?act=xoasp&id=".$id;
                                    $imgpath = "../upload/" .$img;
                                        if (is_file($imgpath)) {
                                            $image = "<img src='".$imgpath."' height ='80'>";
                                        
                                        } else {
                                            $image = 'no image';
                                           
                                        }
                                    echo'<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$namesp.'</td>   
                                    <td>'.$image.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$view.'</td>
                                    <td><a href ="'.$suasp.'"><input type="button" value="Sửa"></a>
                                        <a href ="'.$xoasp .'"><input type="button" value="Xóa"></td></a>
                                </tr>';
                                }
                            
                            ?>

                            
                        </table>
                    </div>
                    

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                      
                    </div>
                </form>
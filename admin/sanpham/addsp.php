<div class="row">
            <div class="row frmtitle">
                <h1>Thêm mới sản phẩm</h1>

            </div> 
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh mục <br>
                        <select name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">"'.$name.'"</option>';
                                }
                            ?>
                            
                        </select>
                    </div>
                    
                    
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="namesp">
                    </div>

                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="price">
                    </div>

                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="img" id="">
                    </div>

                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>

                    

                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách "></a>
                    </div>

                    <?php 
                        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
</div>
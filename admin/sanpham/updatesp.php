<?php 
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $imgpath = "../upload/" .$img;
    if (is_file($imgpath)) {
        $image = "<img src='".$imgpath."' height ='80'>";
    
    } else {
        $image = 'no image';
       
    }
?>

<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhật loại hàng hóa</h1>

            </div> 
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10"> 
                    <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                // extract($danhmuc);
                                if ($iddm == $danhmuc['id']) {
                                    echo '<option value="'.$danhmuc['id'].'" selected>"'.$danhmuc['name'].'"</option>';
                                } else {
                                echo '<option value="'.$danhmuc['id'].'">"'.$danhmuc['name'].'"</option>';
                                }
                            }
                        ?>
                </select>

                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="namesp" value="<?=$namesp?>">
                    </div>

                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="price" value="<?=$price?>">
                    </div>

                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="img">
                        <?=$image?>
                    </div>

                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    

                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">


                        <input type="submit" name="capnhat" value="Cập nhật">
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
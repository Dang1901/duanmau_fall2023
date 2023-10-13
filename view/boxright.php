

    <div class="row mb">
        <div class="boxtitle">Tai Khoan</div>
        <div class="boxcontent formtaikhoan">
            <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
            ?>
            
            <div class="row mb10">
                Xin chào </br>
                <?=$user?>
            </div>

            <div class="row mb10">
                <button class="btn-hover color-1"><a  href="index.php?act=quenmk">Quên mật khẩu</a></button>
                <button class="btn-hover color-1"><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></button>

            <?php if ($role == 1) {?>        
                <button class="btn-hover color-1"><a href="../admin/index.php">Đăng nhập Admin</a></button>
            <?php } ?>        

                <button class="btn-hover color-1"><a href="index.php?act=logout">Đăng xuất</a></button>
            </div>

            <?php
                }else{
            ?>

            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    Mật khẩu <br>
                    <input type="password" name="pass">
                </div>

                <div class="row mb10">
                    <input type="checkbox" name="">Ghi nhớ tài khoản ?
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap"> 
                </div>
            </form>

            <li><a href="#">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>

            <?php }?>

        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">Danh Muc</div>
        <div class="boxcontent2 menudoc">
            <ul>
                <?php 
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" .$id;
                    
                        echo '<li>
                                    <a href="'.$linkdm.'">'.$name.'</a>
                                </li>'; 
                                                        
                    }
                ?>
                <!-- <li><a href="#">Điện thoại</a></li> 
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Ipad</a></li>
                <li><a href="#">Đồng hồ</a></li>
                <li><a href="#">Điện thoại</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Ipad</a></li>   
                <li><a href="#">Đồng hồ</a></li> -->
            </ul>
        </div>
        <div class="boxfooter searchbox">
            <form action="index.php?act=sanpham" method="post">
                <input type="text" name="kyw">
                <button type="submit" name="timkiem">Tìm kiếm</button>
            </form>   
        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">Top 10 Yeu Thich</div>
        <div class="row boxcontent">
            <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $img = $img_path.$img;
                    echo '  <div class="row mb10 top10">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                <a href="'.$linksp.'">'.$namesp.'</a>
                            </div>';
                }
            ?>
            <!-- <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div>
            <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div>
            <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div>
            <div class="row mb10 top10">
                <img src="../img/product_2.jpg" alt="">
                <a href="#">Iphone ne pro</a>
            </div> -->

        </div>
    </div>


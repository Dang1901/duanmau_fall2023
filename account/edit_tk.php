<div class="row mb">
    <div class="dangky">
        <!-- <div class="row mb"> -->
        
            <div class="boxtitle_dangky">Cập nhật tài khoản</div>
        
            <div class="boxcontent_dangky ">
                <?php
                    if (isset($_SESSION['user']) && is_array(($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                ?>
               <form action="index.php?act=edit_tk" method="post">
                    <div>User <span>*</span></div>
                    <input class="inputdangky" type="test" name="user" value="<?=$user?>">

                    <div>Password <span>*</span></div>
                    <input class="inputdangky" type="password" name="pass" value="<?=$pass?>">

                    <div>Email <span>*</span></div>
                    <input class="inputdangky" type="email" name="email" value="<?=$email?>">

                    <div>Dịa chỉ <span>*</span></div>
                    <input class="inputdangky" type="text" name="address" value="<?=$address?>">

                    <div>Số điện thoại <span>*</span></div>
                    <input class="inputdangky" type="text" name="tel" value="<?=$tel?>">

                    <input type="hidden" name="id" value="<?=$id?>"> 
                    <input class="inputsubmit" type="submit" value="Cập nhật" name="capnhat">
                    <input class="inputsubmit" type="reset" name="Nhập lại">
                </form> 
                <h2 class="tb_loi">
                    <?php
                        if (isset($thongbaodk) && ($thongbaodk != "")){
                            echo $thongbaodk;
                        }
                            
                    ?> 
                    </h2>
            </div>
        </div>
       
    </div>

  

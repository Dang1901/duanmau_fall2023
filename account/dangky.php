<div class="row mb">
    <div class="dangky">
        <!-- <div class="row mb"> -->
        
            <div class="boxtitle_dangky">Đăng ký thành viên</div>
        
            <div class="boxcontent_dangky ">
               <form action="index.php?act=dangky" method="post">
                    <div>User <span>*</span></div>
                    <input class="inputdangky" type="test" name="user">
                    <div>Email <span>*</span></div>
                    <input class="inputdangky" type="email" name="email">
                    <div>Password <span>*</span></div>
                    <input class="inputdangky" type="password" name="pass">
                    <input class="inputsubmit" type="submit" value="Đăng ký" name="dangky">
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

  

<div class="row mb">
    <div class="dangky">
        <!-- <div class="row mb"> -->
        
            <div class="boxtitle_dangky">Quên mật khẩu</div>
        
            <div class="boxcontent_dangky ">
               <form action="index.php?act=quenmk" method="post">
                    
                    <div>Email <span>*</span></div>
                    <input class="inputdangky" type="email" name="email">
                    
                    <input class="inputsubmit" type="submit" value="Gửi" name="guiemail">
                    <input class="inputsubmit" type="reset" name="Nhập lại">
                </form> 
                <h2 class="tb_loi">
                    <?php
                        if (isset($thongbao) && ($thongbao != "")){
                            echo $thongbao;
                        }
                            
                    ?> 
                    </h2>
            </div>
        </div>
       
    </div>

  

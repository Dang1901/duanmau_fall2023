<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">Sản Phẩm: <strong><?=$tendm?></strong></div>
            <div class="row boxcontent">
                <?php
                    $i = 0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $img = $img_path.$img;
                        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 12)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo    '<div class="boxsp '.$mr.'">
                                    <div class="row img">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                    </div>
                                    <p>'.$price.'</p>
                                    <a href="'.$linksp.'">'.$namesp.'</a>
                                </div>';

                        $i += 1; 
                    }
                ?>
            </div>
        </div>   
    </div>

    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>

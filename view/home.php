 <!------------------------------Product--------------------------------->
 <div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <img src="../img/banner_1.jpg" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                        </div>

                        <div class="mySlides fade">
                        <img src="../img/banner_2.jpg" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                        <img src="../img/banner_3.webp" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>

                        <div class="mySlides fade">
                        <img src="../img/banner_4.png" style="width:100%">
                        <!-- <div class="text">Caption Four</div> -->
                        </div>

                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        </div> -->
                    </div> 
                </div>
                <div class="row">
                    <?php 
                         $i = 0;
                         foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $img = $img_path.$img;
                            if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
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
 
                    <!-- <div class="boxsp ">
                        <div class="row img">
                            <img src="../img/product_1.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_2.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="../img/product_3.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_4.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_5.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="../img/product_1.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_2.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="../img/product_3.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="../img/product_4.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 12</a>
                    </div> -->
                    
                </div>

            </div>
            <div class="boxphai">
                <?php
                
                    include "boxright.php";            
                 ?>

            </div>
            
        </div>
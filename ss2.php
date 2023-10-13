<?php
    session_start();
    if (isset($_SESSION['mycart'])) {
        foreach ($_SESSION['mycart'] as $cart) {
            echo "Mã sản phẩm: ".$cart[0];
            echo "Tên sản phẩm: ".$cart[1];
            echo "Giá sản phẩm: ".$cart[2];
            echo "Số lượng: ".$cart[3] .'<br>' ;
        }
        echo '<h1>Session đã tạo</h1>';
    } else {
        echo '<h1>Session đã bị hủy</h1>';
    }
    
    echo '<a href="ss1.php">Khởi tạo</a>';
    echo '<a href="ss3.php">Hủy session</a>';
?>
<?php
    session_start();
    session_destroy();
    echo '<h1>Session đã bị hủy</h1>';
    echo '<a href="ss1.php">Khởi tạo session</a>';
    echo '<a href="ss2.php">Show session</a>';
?>
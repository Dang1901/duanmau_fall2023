<?php
// Them vao danh muc
function insert_sanpham($namesp, $price, $img, $mota, $iddm) {
    $sql = "insert into sanpham(namesp, price, img, mota, iddm) values ('$namesp', '$price','$img','$mota','$iddm')";
    pdo_execute($sql); 
                
}


// Xoa danh muc
function delete_sanpham($id) { 
    $sql = "delete from sanpham where id =" .$id;
    pdo_execute($sql);
}


// Hien tat ca danh muc vao trang home
function listall_sanpham_home () {
    $sql= "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// hien thi top 10 san pham co nhieu view
function listall_sanpham_top10 () {
    $sql= "select * from sanpham where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function listall_sanpham ($kyw="", $iddm=0) {
    $sql= "select * from sanpham where 1";
    if ($kyw != "") {
        $sql.= " and namesp like '%".$kyw."%'";
    }   
    if ($iddm > 0) {
        $sql.= " and iddm like '".$iddm."'";
    }
    $sql.= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


// Sua san pham
function loadone_sanpham($id) {
    $sql ="select * from sanpham where id =".$id;
    $sp = pdo_query_one($sql); 
    return  $sp;
}
// load ten danh muc
function load_ten_dm($iddm) {
    if ($iddm > 0) {
        $sql ="select * from danhmuc where id =".$iddm;
        $dm = pdo_query_one($sql); 
        extract($dm);
        return $name;
    } else {
        return "";
    }
    
}

// san pham cu loai
function load_sanpham_cungloai($id, $iddm) {
    $sql ="select * from sanpham where iddm =".$iddm." AND id <> ".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// Cap nhat danh muc
function update_sanpham($id, $iddm, $namesp, $price, $mota, $img) {
    if ($img != "") {
        $sql = "update sanpham set iddm ='".$iddm."', namesp ='".$namesp."',  price ='".$price."', mota ='".$mota."', img ='".$img."' where id =".$id;    
    } else {
        $sql = "update sanpham set iddm ='".$iddm."', namesp ='".$namesp."',  price ='".$price."', mota ='".$mota."' where id =".$id; 
    }
    
     pdo_execute($sql); 
}


?>
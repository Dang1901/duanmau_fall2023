<?php
// Them vao danh muc
function insert_danhmuc($tenloai) {
    $sql = "insert into danhmuc(name) values ('$tenloai')";
    pdo_execute($sql); 
                
}


// Xoa danh muc
function delete_danhmuc($id) {
    $sql = "delete from danhmuc where id =" .$id;
    pdo_execute($sql);
}


// Hien tat ca danh muc
function listall_danhmuc () {
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}


// Sua danh muc
function sua_danhmuc($id) {
    $sql ="select * from danhmuc where id =".$id;
    $dm = pdo_query_one($sql); 
    return $dm;
}


// Cap nhat danh muc
function update_danhmuc($id, $tenloai) {
    $sql = "update danhmuc set name ='".$tenloai." 'where id =".$id;
     pdo_execute($sql); 
}


?>
<?php 
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/account.php";
include "header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
/*--------------------------------------Controller Danh muc-------------------------------------------------*/
//          Them moi danh muc
            case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Them thanh cong";
            }               
            include "danhmuc/add.php"; 
            break;


//          Danh sach danh muc         
            case 'listdm':
                $listdanhmuc = listall_danhmuc();
                include "danhmuc/listdm.php"; 
                break;

            
//          Xoa danh muc    
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = listall_danhmuc();
                include "danhmuc/listdm.php"; 
                break;


//          Sua danh muc     
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id']>0)){
                    $dm =  sua_danhmuc($_GET['id']);
                }      
                 include "danhmuc/updatedm.php"; 
                break;


//          Cap nhat danh muc      
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                    
                }  
                $listdanhmuc = listall_danhmuc();
                include "danhmuc/listdm.php";
                break;


/*--------------------------------------Controller Sản Phẩm-------------------------------------------------*/
            //          Them moi danh muc
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm = $_POST['iddm']; 
                    $namesp = $_POST['namesp'];
                    $price = $_POST['price'];
                    $mota = $_POST['mota'];
                    $img = $_FILES['img']['name']; 
                    // khai bao upload file 
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                  //  echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                        } else {

                        echo "Sorry, there was an error uploading your file.";
                         }
                
                insert_sanpham($namesp, $price, $img, $mota, $iddm);
                $thongbao = "Them thanh cong"; 
                } 
                $listdanhmuc = listall_danhmuc();               
                include "sanpham/addsp.php"; 
                break;


            //          Danh sach danh muc         
                case 'listsp':
                    if (isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw = $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    } else {
                        $kyw = '';
                        $iddm = 0;
                    } 
                    $listdanhmuc = listall_danhmuc();  
                    $listsanpham = listall_sanpham($kyw, $iddm);
                    include "sanpham/listsp.php"; 
                    break;

                
            //          Xoa danh muc    
                case 'xoasp':
                    if (isset($_GET['id']) && ($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham = listall_sanpham("", 0);
                    include "sanpham/listsp.php"; 
                    break;


            //          Sua danh muc     
                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id']>0)){
                        $sanpham =  loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = listall_danhmuc();       
                    include "sanpham/updatesp.php"; 
                    break;


            //          Cap nhat danh muc      
                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm']; 
                        $namesp = $_POST['namesp'];
                        $price = $_POST['price'];
                        $mota = $_POST['mota'];
                        $img = $_FILES['img']['name']; 
                        // khai bao upload file
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //  echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                            } else {

                            // echo "Sorry, there was an error uploading your file.";
                            }
                    
                            update_sanpham($id, $iddm, $namesp, $price, $mota, $img);
                            $thongbao = "Cập nhật thành công"; 
                            } 
                            
                    $listdanhmuc = listall_danhmuc(); 
                    $listsanpham = listall_sanpham("", 0);
                    include "sanpham/listsp.php"; 
                    break;

                case 'dstk': 
                    $listall_tk = loadall_tk();    
                    include "taikhoan/dstk.php"; 
                    break;

            default : 
                include "home.php";
                 break; 
        } 
    } else {
        include "home.php";
    }

include "footer.php";

?>
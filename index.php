<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/account.php";
    include "view/header.php";
    include "global.php";

    $spnew = listall_sanpham_home ();
    $dsdm = listall_danhmuc ();
    $dstop10 = listall_sanpham_top10 ();
    
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];

        switch ($act) {
            case 'gioithieu':
                include "view/gioithieu.php";
                break;

            case 'sanphamct':
                
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $spcl = load_sanpham_cungloai($id, $iddm);
                    include "view/sanphamct.php";
                } else {
                    include "view/home.php";
                }
                
                break;

            case 'sanpham':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                    $dssp = listall_sanpham ($kyw, $iddm);
                    $tendm = load_ten_dm($iddm);
                    include "view/sanpham.php";
                break;

            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    insert_account($user, $pass, $email,);
                    $thongbaodk = "Đã đăng ký thành công";
                }
                
                include "account/dangky.php";
                break;

            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                        
                    if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbaodk = "Đã đăng ký thành công";
                    header('Location: index.php');
                    } else {
                        $thongbaodk = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                    }
                }
                
                include "account/dangky.php";
                break;

            case 'edit_tk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_account($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user'] = checkuser($user, $pass);
                    // header('Location: index.php?act=edit_tk');    
                    header('Location: index.php');    
                }
                include "account/edit_tk.php";
                break;

            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                        if(is_array($checkemail)) {
                            $thongbao = "Mật khẩu của bạn là".$checkemail['pass'] ;
                        } else {
                            $thongbao = "Email này không tồn tại";
                        }   
                }
                include "account/quenmk.php";
                break;

            case 'logout':
                session_unset();
                header ('Location: index.php');
                break;

            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'gopy':
                include "view/gopy.php";
                break;
            case 'hoidap':
                include "view/hoidap.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }  
    
    include "view/footer.php";

?>
<div class="row">
            <div class="row frmtitle">
                <h1>Danh sách tài khoản</h1>

            </div> 

            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row mb10 formdanhsachloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã TK</th>
                                <th>Tên Tk</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Địa chỉ</th> 
                                <th>SĐT</th>
                                <th>Vai trò</th>
                                <th></th>

                            </tr>   
                            <?php 
                                foreach ($listall_tk as $taikhoan) {
                                    extract($taikhoan);
                                    $suatk = "index.php?act=suadm&id=".$id;
                                    $xoatk = "index.php?act=xoatk&id=".$id;
                                    echo'<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td><a href ="'.$suatk.'"><input type="button" value="Sửa"></a>
                                        <a href ="'.$xoatk .'"><input type="button" value="Xóa"></td></a>
                                </tr>';
                                }
                            
                            ?>

                            
                        </table>
                    </div>
                    

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                    </div>
                </form>
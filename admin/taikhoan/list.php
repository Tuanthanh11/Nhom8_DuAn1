<div class="row bm frmtitle">
            <h1>DANH SACH KHACH HANG</h1>
        </div>
        <div class="row">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table>
                    <tr>
                        <th></th>
                        <th>Ma tk</th>
                        <th>Username</th>
                        <!-- <th>Password</th> -->
                        <th>Email</th>
                        <th>Dia chi</th>
                        <th>SDT</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listtk as $taikhoan){
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoadtk="index.php?act=xoatk&id=".$id;
                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>`
                            
                            <td>'.$email.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$role.'</td>
                            <td> <a href="'.$suatk.'"><button type="button">Sua</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoadtk.'"><button type="button">Xoa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <button type="button">Chon tat ca</button>
                    <button type="button">Xoa tat ca</button>
                    <button type="button">Bo chon tat ca</button>
                    <a href="../index.php"><button type="button">Home</button></a>
                </div>
            </form>
        </div>
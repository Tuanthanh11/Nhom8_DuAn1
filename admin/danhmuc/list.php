<div class="row bm frmtitle">
            <h1>Danh sach loai hang</h1>
        </div>
        <div class="row">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table>
                    <tr>
                        <th></th>
                        <th>Ma loai</th>
                        <th>Ten loai</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listdm as $dm){
                            extract($dm);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$tendm.'</td>
                            <td> <a href="'.$suadm.'"><button type="button">Sua</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoadm.'"><button type="button">Xoa</button></a>
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
                    <a href="index.php?act=adddm"><button type="button">Nhap them</button></a>
                </div>
            </form>
        </div>
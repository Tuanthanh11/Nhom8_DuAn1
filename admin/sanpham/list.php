<div class="row bm frmtitle">
            <h1>Danh sach san pham</h1>
        </div>
        <form action="#" method="post">
            <input type="text" name="kyw" id="">
            <select name="iddm" id="">
                <option value="0" select>Tat ca</option>
                <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                ?>
            </select>
            <input type="submit" name="listok" value="GO">
        </form>
        <br>
        <div class="row">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table>
                    <tr>
                        <th></th>
                        <th>Ma san pham</th>
                        <th>Ten san pham</th>
                        <th>Hinh</th>
                        <th>Gia</th>
                        <th>Size</th>
                        <th>So luong</th>
                        <th>Luot xem</th>
                        <th>mota</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listsp as $sp){
                            extract($sp);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$hinhanh;
                            if(is_file($hinhpath)){
                               $img ="<img src='".$hinhpath."' width='80'>" ;
                            }else{
                                $img = "no photo";
                            }

                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$tensp.'</td>
                            <td>'.$img.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$size.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$luotxem.'</td>
                            <td>'.$mota.'</td>
                            <td> <a href="'.$suasp.'"><button type="button">Sua</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoasp.'"><button type="button">Xoa</button></a>
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
                    <a href="index.php?act=addsp"><button type="button">Nhap them</button></a>
                </div>
            </form>
        </div>
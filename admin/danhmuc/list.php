<div class="container-fluid pt-4 px-4 ">
            <h1>Danh sach loai hang</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="" method="post">
                <div class="">
                   <table class="table">
                    <tr>
                        <th></th>
                        <th>Ma loai</th>
                        <th>Ten loai</th>
                        <th>Chuc nang</th>
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
                            <td> <a href="'.$suadm.'"><button class="btn btn-primary" type="button">Sua</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoadm.'"><button class="btn btn-primary" type="button">Xoa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="index.php?act=adddm"><button class="btn btn-primary" type="button">Nhap them</button></a>
                </div>
            </form>
        </div>
        
        

   
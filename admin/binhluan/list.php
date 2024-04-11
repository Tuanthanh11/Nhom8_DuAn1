<div class="container-fluid pt-4 px-4 ">
            <h1>DANH SACH BINH LUAN</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="" method="post">
                <div class="">
                   <table class="table">
                    <tr>
                        <th>id</th>
                        <th>user</th>
                        <th>tensp</th>
                        <th>Nội dung</th>
                        <th>ngàybìnhluận</th>
                        
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listbl as $bl){
                            extract($bl);
                            
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '
                                <tr>
                            
                            <td>'.$id.'</td>
                            <td>'.$ten.'</td>`
                            <td>'.$tensp.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$ngaybinhluan.'</td>
            
                            <td> 
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoabl.'"><button class="btn btn-primary" type="button">Xóa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="../index.php"><button class="btn btn-primary" type="button">Trang chủ</button></a>
                </div>
            </form>
        </div>
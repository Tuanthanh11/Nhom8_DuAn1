<div class="container-fluid pt-4 px-4 ">
            <h1>DANH SACH BINH LUAN</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="" method="post">
                <div class="">
                   <table class="table">
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Noi dung</th>
                        <th>iduser</th>
                        <th>idpro</th>
                        <th>ngaybinhluan</th>
                        
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listbl as $bl){
                            extract($bl);
                            
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>`
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
            
                            <td> 
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoabl.'"><button class="btn btn-primary" type="button">Xoa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="../index.php"><button class="btn btn-primary" type="button">Home</button></a>
                </div>
            </form>
        </div>
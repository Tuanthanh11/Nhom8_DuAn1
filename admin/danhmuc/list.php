<div class="container-fluid pt-4 px-4 ">
            <h1>Danh sách loại hàng</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="" method="post">
                <div class="">
                   <table class="table">
                    <tr>
                        
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php 
                        foreach($listdm as $dm){
                            extract($dm);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '
                                <tr>
                            
                            <td>'.$id.'</td>
                            <td>'.$tendm.'</td>
                            <td> <a href="'.$suadm.'"><button class="btn btn-primary" type="button">Sửa</button></a>
                              
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="index.php?act=adddm"><button class="btn btn-primary" type="button">Nhập thêm</button></a>
                </div>
            </form>
        </div>
        
        

   
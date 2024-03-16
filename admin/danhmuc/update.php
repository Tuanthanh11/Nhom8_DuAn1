<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
?>

<div class="row bm frmtitle">
            <h1>Cap nhat hang hoa</h1>
        </div>
        <div class="row">
            <form action="index.php?act=updatedm" method="post">
                <div class="row frmcontent">
                    Ma loai <br>
                    <input type="text" name="id" id=""><br><br>
                    Ten loai <br>
                    <input type="text" name="tendm" id="" value="<?=$tendm?>" ><br>
                </div>
                
                <div class="row frmcontent">
                    <input type="hidden" name="id" value="<?= $id?>">
                    <button type="submit" name="capnhat" value="capnhat" >Cập nhật</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listdm"><button type="button">Danh sach</button></a>
                </div>
                <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="thongbao">'.$thongbao.'</div>';
                        }
                        ?>
            </form>
        </div>
    </div>
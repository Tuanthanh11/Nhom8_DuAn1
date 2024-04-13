<?php
    if(isset($taikhoan)){
        extract($taikhoan);
    }
?>


<div class="container-fluid pt-4 px-4 ">
    <h1>Cập nhật Tài khoản</h1>
</div>
<div class="bg-light rounded p-4">
    <form action="index.php?act=updatetk" method="post">
        <div class="row frmcontent">
            Tên tài khoản: <br>
            <input type="text" class="form-control" name="user" value="<?= $user ?>"> <br>
            Email: <br>
            <input type="email" class="form-control" name="email" value="<?= $email ?>"> <br>
            Số điện thoại: <br>
            <input type="text" class="form-control" name="sdt" value="<?= $sdt ?>"> <br>
            Địa chỉ: <br>
            <input type="text" class="form-control" name="diachi" value="<?= $diachi ?>"> <br>
            Mật khẩu: <br>
            <input type="text" class="form-control" name="pass" value="<?= $pass ?>"> <br>
            role: <br>
            <input type="number" class="form-control" name="role" value="<?= $role ?>"> <br>
        </div>

        <div class="pt-4">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
            <input class="btn btn-primary" type="reset" value="Nhập lại">
            <a href="index.php?act=dskh"><button class="btn btn-primary" type="button">Danh sách</button></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo '<div class="thongbao">' . $thongbao . '</div>';
        }
        ?>
    </form>
</div>


<!-- Contact End -->
<!-- <div class="row bm frmtitle">
            <h1>Cap nhat hang hoa</h1>
        </div>
        <div class="row">
            <form action="index.php?act=updatedm" method="post">
                <div class="row frmcontent">
                    Ma loai <br>
                    <input type="text" name="id" id=""><br><br>
                    Ten loai <br>
                    <input type="text" name="tendm" id="" value="<?= $tendm ?>" ><br>
                </div>
                
                <div class="row frmcontent">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <button type="submit" name="capnhat" value="capnhat" >Cập nhật</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listdm"><button type="button">Danh sach</button></a>
                </div>
                <?php
                // if (isset($thongbao) && ($thongbao != "")) {
                //     echo '<div class="thongbao">' . $thongbao . '</div>';
                // }
                ?>
            </form>
        </div>
    </div> -->
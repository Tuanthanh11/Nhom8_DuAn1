<div class="container-fluid pt-4 px-4 ">
    <h1>Thêm mới tài khoản</h1>
</div>
<div class="bg-light rounded p-4 ">
    <form action="index.php?act=addtk" method="post">
        <div class="row frmcontent">
            Tên tài khoản: <br>
            <input type="text" class="form-control" name="user" required> <br>
            Email: <br>
            <input type="email" class="form-control" name="email" required> <br>
            Số điện thoại: <br>
            <input type="text" class="form-control" name="sdt" required> <br>
            Địa chỉ: <br>
            <input type="text" class="form-control" name="diachi" required> <br>
            Mật khẩu: <br>
            <input type="password" class="form-control" name="pass" required> <br>
            Nhập lại mật khẩu: <br>
            <input type="password" class="form-control" name="nhaplai" required> <br>
        </div>
        <div class="pt-4">
            <button class="btn btn-primary" type="submit" name="themmoi" value="themmoi">Thêm mới</button>
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <a href="index.php?act=dskh"><button class="btn btn-primary" type="button">Danh sách</button></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>
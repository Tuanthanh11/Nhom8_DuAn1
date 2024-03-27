<!-- Contact Start -->
<div class="container-fluid pt-5 ">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Đăng Ký tai khoan</span></h2>
        </div>
        
            <div class=" form_dk ">
                <div class="contact-form">
                    <form action="index.php?act=dangky" method="post">
                        <div class="control-group">
                            Tên tài khoản: <br>
                            <input type="text" class="form-control" name="user" required> <br>
                        </div>
                        <div class="control-group">
                            Email: <br>
                            <input type="email" class="form-control" name="email" required> <br>
                        </div>
                        <div class="control-group">
                            SDT: <br>
                            <input type="text" class="form-control" name="sdt" required> <br>
                        </div>
                        <div class="control-group">
                            Dia chi: <br>
                            <input type="text" class="form-control" name="diachi" required> <br>
                        </div>
                        <div class="control-group">
                            Mật khẩu: <br>
                            <input type="password" class="form-control" name="pass" required> <br>
                        </div>
                        <div class="control-group">
                            Nhập lại mật khẩu: <br>
                            <input type="password" class="form-control" name="nhaplai" required> <br>
                        </div>
                        <div >
                            <input class="btn btn-primary py-2 px-4" type="submit" name="dangky" value="dang ky">
                        </div>
                    </form>

                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="thongbao">'.$thongbao.'</div>';
                        }
                    ?>
                </div>
            </div>
            
        
    </div>
    <!-- Contact End -->
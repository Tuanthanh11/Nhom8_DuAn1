<!-- Contact Start -->
<div class="container-fluid pt-5 ">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Dang nhap tai khoan</span></h2>
        </div>
        
            <div class=" form_dk ">
                <div class="contact-form">
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="control-group">
                            User name: <br>
                            <input type="text" class="form-control" name="user"> <br>
                        </div>
                        <div class="control-group">
                            Password: <br>
                            <input type="password" class="form-control" name="pass"> <br>
                        </div>
                        <div >
                            <input class="btn btn-primary py-2 px-4" type="submit" name="dangnhap" value="dangnhap">
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
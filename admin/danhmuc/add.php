<div class="container-fluid pt-4 px-4 ">
            <h1>Them moi loai hang</h1>
        </div>
        <div class="bg-light rounded p-4 ">
        <form action="index.php?act=adddm" method="post">
                <div class="row frmcontent">
                    Ma loai <br>
                    <input class="form-control" type="text" name="madm" id=""><br>
                    Ten loai <br>
                    <input class="form-control" type="text" name="tendm" id=""><br>
                </div>
                
                <div class="pt-4">
                    <button class="btn btn-primary" type="submit" name="themmoi" value="themmoi" >Them moi</button>
                    <button class="btn btn-primary" type="reset">Nhap lai</button>
                    <a href="index.php?act=listdm"><button class="btn btn-primary" type="button">Danh sach</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
        
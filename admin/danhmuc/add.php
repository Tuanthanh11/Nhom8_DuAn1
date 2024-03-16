<div class="row bm frmtitle">
            <h1>Them moi loai hang hoa</h1>
        </div>
        <div class="row">
            <form action="index.php?act=adddm" method="post">
                <div class="row frmcontent">
                    Ma loai <br>
                    <input type="text" name="madm" id=""><br><br>
                    Ten loai <br>
                    <input type="text" name="tendm" id=""><br>
                </div>
                
                <div class="row frmcontent">
                    <button type="submit" name="themmoi" value="themmoi" >Them moi</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listdm"><button type="button">Danh sach</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
    </div>
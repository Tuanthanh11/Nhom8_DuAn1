<div class="row bm frmtitle">
            <h1>Them moi san pham</h1>
        </div>
        <div class="row">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row frmcontent">
                    Ten san pham <br>
                    <input type="text" name="tensp" id=""><br><br>
                    Gia <br>
                    <input type="text" name="gia" id=""><br><br>
                    Danh muc <br>
                    <select name="iddm" id="">
                        <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                    
                    Hinh <br>
                    <input type="file" name="hinh" id=""><br><br>
                    Mo ta<br>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="row frmcontent">
                    <button type="submit" name="themsp" value="themsp" >Them moi</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listsp"><button type="button">Danh sach</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
    </div>
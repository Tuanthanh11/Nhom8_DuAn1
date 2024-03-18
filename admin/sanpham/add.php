<div class="container-fluid pt-4 px-4 ">
            <h1>Them moi san pham</h1>
        </div>
        <div class="bg-light rounded p-4 ">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row frmcontent">
                    Ten san pham <br>
                    <input class="form-control" type="text" name="tensp" id=""><br>
                    Gia <br>
                    <input class="form-control" type="text" name="gia" id=""><br>
                    Size <br>
                    <input class="form-control" type="text" name="size" id=""><br>
                    So luong <br>
                    <input class="form-control" type="text" name="soluong" id=""><br>
                    Danh muc <br>
                    <select class="form-control" name="iddm" id="">
                        <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            echo '<option value="'.$id.'">'.$tendm.'</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                    
                    Hinh <br>
                    <input  type="file" name="hinh" id=""><br>
                    Mo ta<br>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                
                <div class="pt-4">
                    <button class="btn btn-primary" type="submit" name="themsp" value="themsp" >Them moi</button>
                    <button class="btn btn-primary" type="reset">Nhap lai</button>
                    <a href="index.php?act=listsp"><button class="btn btn-primary" type="button">Danh sach</button></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                } 
                ?>
            </form>
        </div>
    
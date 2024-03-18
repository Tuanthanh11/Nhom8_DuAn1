<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$hinhanh;
     if(is_file($hinhpath)){
       $img ="<img src='".$hinhpath."' width='80'>" ;
    }else{
      $img = "no photo";
    }
?>

<div class="container-fluid pt-4 px-4 ">
            <h1>Cap nhat san pham</h1>
        </div>
        <div class="bg-light rounded p-4">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row frmcontent">
                    Danh muc: 
                    <select name="iddm" id="">
                        <option value="0" select>Tat ca</option>
                    <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            if($iddm==$id) $s="selected"; else $s="";
                            echo '<option value="'.$id.'" '.$s.'>'.$tendm.'</option>';
                    }
                    ?>
                    </select>
                    <br><br>
                    <?php
                    extract($sanpham);
                    ?>
                    Ten san pham <br>
                    <input class="form-control" type="text" name="tensp" value="<?=$tensp?>"><br>
                    Gia <br>
                    <input class="form-control" type="text" name="gia" value="<?=$gia?>"><br>
                    Size <br>
                    <input class="form-control"type="text" name="size" value="<?=$size?>"><br>
                    So luong <br>
                    <input class="form-control" type="text" name="soluong" value="<?=$soluong?>"><br>
                    Hinh <br>
                    <div width='120'><?=$img?> </div>
                    <input type="file" name="hinh" id=""><br>
                    Mo ta<br>
                    <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                
                <div class="pt-4">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <button class="btn btn-primary" type="submit" name="capnhat" value="capnhat" >Cap nhat</button>
                    <button class="btn btn-primary" type="reset">Nhap lai</button>
                    <a href="index.php?act=listsp"><button class="btn btn-primary" type="button">Danh sach</button></a>
                </div>
                <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="thongbao">'.$thongbao.'</div>';
                        }
                        ?>
            </form>
        </div>
    
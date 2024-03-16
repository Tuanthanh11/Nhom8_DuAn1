<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
     if(is_file($hinhpath)){
       $hinhanh ="<img src='".$hinhpath."' width='80'>" ;
    }else{
      $hinhanh = "no photo";
    }
?>

<div class="row bm frmtitle">
            <h1>Cap nhat hang hoa</h1>
        </div>
        <div class="row">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row frmcontent">
                    Danh muc: 
                    <select name="iddm" id="">
                        <option value="0" select>Tat ca</option>
                    <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            if($iddm==$id) $s="selected"; else $s="";
                            echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                    }
                    ?>
                    </select>
                    <br><br>
                    <?php
                    extract($sanpham);
                    ?>
                    Ten san pham <br>
                    <input type="text" name="tensp" value="<?=$name?>"><br>
                    Gia <br>
                    <input type="text" name="gia" value="<?=$price?>"><br>
                    Hinh <br>
                    <?=$hinhanh?>
                    <input type="file" name="hinh" id=""><br>
                    Mo ta<br>
                    <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                
                <div class="row frmcontent">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <button type="submit" name="capnhat" value="capnhat" >Cap nhat</button>
                    <button type="reset">Nhap lai</button>
                    <a href="index.php?act=listsp"><button type="button">Danh sach</button></a>
                </div>
                <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="thongbao">'.$thongbao.'</div>';
                        }
                        ?>
            </form>
        </div>
    </div>
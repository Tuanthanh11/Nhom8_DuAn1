<?php
function insert_sanpham($tensp,$img,$gia,$size,$soluong,$mota,$iddm){
    $sql="INSERT INTO sanpham(tensp,hinhanh,gia,size,soluong,mota,iddm) 
    VALUES('$tensp','$img','$gia','$size','$soluong','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham($kyw,$iddm){
    $sql="SELECT * FROM sanpham where 1";
    if($kyw!=""){
         $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
       $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" ORDER BY id DESC";
    $listsp=pdo_query($sql);
    return $listsp;
}

function loadone_sanpham($id){
    $sql="SELECT * FROM sanpham WHERE id=".$id;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
 }

 function update_sanpham($id,$tensp,$img,$gia,$size,$soluong,$mota,$iddm){
    if($img!=""){
       $sql="UPDATE sanpham SET tensp='".$tensp."',hinhanh='".$img."',gia='".$gia."',size='".$size."',soluong='".$soluong."',mota='".$mota."',iddm='".$iddm."' WHERE id=".$id;
    }else{
        $sql="UPDATE sanpham SET tensp='".$tensp."',gia='".$gia."',size='".$size."',soluong='".$soluong."',mota='".$mota."',iddm='".$iddm."' WHERE id=".$id;
    }
     
     pdo_execute($sql);
  }

  function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham where 1 ORDER BY id DESC LIMIT 0,6";
    $listsp=pdo_query($sql);
    return $listsp;
 }

 function loadall_sanphamvip_home(){
    $sql="SELECT * FROM sanpham where 1 ORDER BY id DESC LIMIT 0,9";
    $listsp=pdo_query($sql);
    return $listsp;
 }

?>
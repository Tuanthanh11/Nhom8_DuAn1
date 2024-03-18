<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";


include "header.php";
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
switch ($act) {
    // danh muc
    case 'adddm':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $tendm=$_POST['tendm'];
            insert_danhmuc($tendm);
            $thongbao="them thanh cong";
        }
        include "danhmuc/add.php";
        break;

    case 'listdm':

        $listdm=loadall_danhmuc();
        include "danhmuc/list.php";
        break;

    case 'suadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $danhmuc=add_danhmuc($_GET['id']);
        }
        include "danhmuc/update.php";
        break;

    case 'updatedm':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            $tendm=$_POST['tendm'];
            $id=$_POST['id'];
            update_danhmuc($tendm,$id);
        }
        $listdm=loadall_danhmuc();
        include "danhmuc/list.php";
        break;
    case 'xoadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_danhmuc($_GET['id']);
        }
            $listdm=loadall_danhmuc();
            include "danhmuc/list.php";
            break;   
    //san pham

    case 'addsp':
        if(isset($_POST['themsp'])&&($_POST['themsp'])){
            $tensp=$_POST['tensp'];
            $gia=$_POST['gia'];
            $size=$_POST['size'];
            $soluong=$_POST['soluong'];
            $mota=$_POST['mota'];
            $iddm=$_POST['iddm'];

            $file=$_FILES['hinh'];
            $img=$file['name'];
            move_uploaded_file($file['tmp_name'],"../upload/".$img);

            insert_sanpham($tensp,$img,$gia,$size,$soluong,$mota,$iddm);
            $thongbao="them thanh cong";
        }
        $listdm=loadall_danhmuc();
        include "sanpham/add.php";
        break;

        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }    
            $listdm=loadall_danhmuc();
            $listsp=loadall_sanpham($kyw,$iddm);
        include "sanpham/list.php";
        break;

        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            $listdm=loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $gia=$_POST['gia'];
                $size=$_POST['size'];
                $soluong=$_POST['soluong'];
                $mota=$_POST['mota'];

                $file=$_FILES['hinh'];
                $img=$file['name'];
                move_uploaded_file($file['tmp_name'],"../upload/".$img);
                update_sanpham($id,$tensp,$img,$gia,$size,$soluong,$mota,$iddm);
                $thongbao="cap nhat thanh cong";
            }
            $listdm=loadall_danhmuc();
            $listsp=loadall_sanpham('',0);
            include "sanpham/list.php";
            break;
                
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsp=loadall_sanpham('',0);
            include "sanpham/list.php";
            break;

            // tai khoan
            case 'dskh':
                $listtk = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

            //binh luan
            case 'dsbl':
                $listbl = loadall_bladmin();
                include "binhluan/list.php";
                break;

            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                    $listbl = loadall_bladmin();
                    include "binhluan/list.php";
                    break;


    
    default:
        include "home.php";
        break;
}
}else{
    include "home.php";
}




include "footer.php";

?>
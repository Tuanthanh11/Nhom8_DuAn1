<?php

    include "view/header.php";
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";  
    include "linkimg.php";
    
    $spnew=loadall_sanpham_home();
    $spvip=loadall_sanphamvip_home();

    if((isset($_GET['act']))&&($_GET['act']!="")){  
        $act=$_GET['act'];
        switch ($act) { 
            case 'lienhe':
                include "view/lienhe.php";
                break;

            case 'sanpham':
                include "view/sanpham.php";
                break;


            case 'giohang':
                include "view/giohang.php";
                break;

            case 'chitietsp':
                include "view/chitietsp.php";
                break;

            case 'dangnhap':
                include "view/dangnhap.php";
                break;

            case 'dangky':
                include "view/dangky.php";
                break;

            
            default:
                include "view/home.php";
                break;
        }
    }else{
    include "view/home.php";
    }

    include "view/footer.php";
    ?>
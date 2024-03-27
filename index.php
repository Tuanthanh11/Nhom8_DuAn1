<?php
    session_start();
    ob_start();
    
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";  
    include "model/taikhoan.php";
    include "model/cart.php";


    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home();
    $spvip=loadall_sanphamvip_home();
    $dsdm=loadall_danhmuc();

    include "view/header.php";
    include "linkimg.php";

    

    if((isset($_GET['act']))&&($_GET['act']!="")){  
        $act=$_GET['act'];
        switch ($act) { 
            //tai khoan

            case 'dangnhap':
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    
                    if(is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        $thongbao = "Đăng nhập thành công";
                        header("location: http://localhost:81/duan1/index.php");
                        exit(); // Thêm exit() để dừng việc thực thi mã sau khi chuyển hướng
                    } else {
                        $thongbao = "Tài khoản không tồn tại, vui lòng đăng ký";
                    }
                }
                
                include "view/dangnhap.php";
                break;

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $sdt=$_POST['sdt'];
                    $diachi=$_POST['diachi'];
                    $pass=$_POST['pass'];
                    $nhaplai=$_POST['nhaplai'];
                    if($pass==$nhaplai){
                        insert_taikhoan($user,$pass,$email,$sdt,$diachi);
                        $thongbao="Dang ky thanh cong, vui long dang nhap";
                    }else{
                        $thongbao="Mật khẩu không trùng khớp";
                    }
                    
                }
                include "view/dangky.php";
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
                include "view/sanpham.php";
                break;

            case 'thoat':
                session_unset();
                header("location: index.php");
                    break;
            case 'lienhe':
                include "view/lienhe.php";
                break;

            case 'dssanpham':

                include "view/sanpham.php"; 
                break;

            case 'sanpham':

                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                    
                }else {
                    $kyw="";
                }
                if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                    $listsp=loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_danhmuc($iddm);
                include "view/sanpham.php";
                break;

            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                            
                $onesp=loadone_sanpham($_GET['idsp']);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$iddm);
            include "view/chitietsp.php";
            break;
                }else{
            include "view/home.php"; 
            break;
                }

             case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['gia'];
                    $soluong=$_POST['soluong'];
                    $hinh=$_POST['hinh'];
                    $size=$_POST['size'];
                    $ttien=$gia * $soluong;


                    $fl=0;
                    for ($i=0; $i < sizeof($_SESSION['mycart']); $i++) { 
                        if($_SESSION['mycart'][$i][1]==$tensp && $_SESSION['mycart'][$i][5]==$size){
                            $fl=1;
                            $spnew=$soluong + $_SESSION['mycart'][$i][4];

                            $_SESSION['mycart'][$i][4]=$spnew;
                            break;
                        }
                    }
                    if($fl==0){
                        $spadd=[$id,$tensp,$gia,$hinh,$soluong,$size,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                    }

                }
                include "view/giohang.php";
                break;

            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    
                }else {
                    $_SESSION['mycart']=[];
                }
                header("Location:index.php?act=addtocart");
                break;
            

                case 'giohang':
                    include "view/giohang.php";
                    break;

            case 'bill':
                include "view/bill.php";
                break;

            case 'billcomfirm':
                    if(isset($_POST['dathang'])&&($_POST['dathang'])){
                        $user=$_POST['user'];
                        $email=$_POST['email'];
                        $sdt=$_POST['sdt'];
                        $diachi=$_POST['diachi'];
                        $pttt=$_POST['pttt'];
                        $ngaydathang=date('h:i:s d/m/y');
                        $tongdonhang=tongdonhang();

                        $idbill=insert_bill($user,$email,$diachi,$sdt,$pttt,$tongdonhang,$ngaydathang);

                        foreach($_SESSION['mycart'] as $cart){
                            insert_cart($_SESSION['user']['id'],$cart[0],$cart[3],$cart[1],$cart[2],$cart[4],$cart[5],$cart[6],$idbill);
                        }

                        
                    }
                    $bill=loadone_bill($idbill);

                include "view/billcomfirm.php";
                $_SESSION['mycart']=[];
                break;

            case 'chitietsp':
                include "view/chitietsp.php";
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
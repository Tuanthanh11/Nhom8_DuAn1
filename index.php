<?php
    session_start();
    ob_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";  
    include "model/taikhoan.php";

    
    include "view/header.php";
    include "linkimg.php";

    $spnew=loadall_sanpham_home();
    $spvip=loadall_sanphamvip_home();
    $sp=loadall_sanphamvip_sanpham();

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
                    insert_taikhoan($user,$pass,$email,$sdt,$diachi);
                    $thongbao="Dang ky thanh cong, vui long dang nhap";
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
                header("location: http://localhost:81/duan1/index.php");
                    break;
            case 'lienhe':
                include "view/lienhe.php";
                break;

            case 'sanpham':
                
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

             case 'giohang':
                include "view/giohang.php";
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
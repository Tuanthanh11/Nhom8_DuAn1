<div class="container-fluid pt-4 px-4 ">
            <h1>Danh sach don hang</h1>
        </div>
        
        <div class="bg-light rounded p-4">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table class="table">
                    <tr>
                        <th></th>
                        <th>Ma don hang</th>
                        <th>Ten khach hang</th>
                        <th>email</th>
                        <th>Dia chi</th>
                        <th>Sdt</th>
                        <th>Phuong thuc thanh toan</th>
                        <th>Ngay dat</th>
                        <th>Tongg tien</th>
                        <th>trang thai</th>
                    </tr>
                    <?php 
                        foreach($dsbill as $dh){
                            extract($dh);
                            $suasp="index.php?act=suadh&id=".$id;
                            $xoasp="index.php?act=xoadh&id=".$id;

                            switch ($pttt) {
                                case '0':
                                    $txtmess="Thanh toán khi nhận hàng";
                                    break;
    
                                    case '1':
                                        $txtmess="Thanh toán online";
                                        break;
                                        case '2':
                                            $txtmess="Thanh toán qua QRcode";
                                            break;
                                
                                default:
                                    $txtmess="quý khách chưa chọn phương thức thanh toán";
                                    break;
                            }

                            /////
                            switch ($trangthai) {
                                case '0':
                                    $tt="Đang sử lý";
                                    break;
    
                                    case '1':
                                        $tt="Đang giao hàng";
                                        break;
                                        case '2':
                                            $tt="Đã nhận hàng";
                                            break;
                                            case '3':
                                                $tt="Hủy";
                                                break;
                                
                                default:
                                    $tt="";
                                    break;
                            }
                           

                            echo '
                                <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$email.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$txtmess.'</td>
                            <td>'.$ngaydathang.'</td>
                            <td>'.$tongdonhang.'</td>
                            <td>'.$tt.'</td>
                            <td> <a href="'.$suasp.'"><button class="btn btn-primary" type="button">Sua</button></a>
                              <a onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" href="'.$xoasp.'"><button class="btn btn-primary" type="button">Xoa</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="index.php?act=addsp"><button class="btn btn-primary" type="button">Nhap them</button></a>
                </div>
            </form>
        </div>
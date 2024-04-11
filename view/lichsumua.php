<div class="container-fluid pt-4 px-4 ">
            <h1>Lịch sử mua hàng</h1>
        </div>
        
        <div class="bg-light rounded p-4">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table class="table">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        
                        <th>Sdt</th>
                        
                        <th>Ngày đặt</th>
                        <th>Tổng tiền</th>
                        <th>trạng thái</th>
                    </tr>
                    <?php 
                        foreach($lichsu as $dh){
                            extract($dh);
                            $suasp="index.php?act=suadh&id=".$id;
                            $xoasp="index.php?act=xoadh&id=".$id;

                            /////
                            switch ($trangthai) {
                                case '0':
                                    $tt="Chờ xác nhận";
                                    break;
    
                                    case '1':
                                        $tt="Đã xác nhận";
                                        break;
                                        case '2':
                                            $tt="Đang giao hàng";
                                            break;
                                            case '3':
                                                $tt="Đã nhận hàng ";
                                                break;
                                                case '4':
                                                    $tt="Hủy";
                                                    break;
                                                   
                                
                                default:
                                    $tt="";
                                    break;
                            }
                           

                            echo '
                                <tr>
                            <td> DH-'.$id.'</td>
                            <td>'.$user.'</td>
                            

                            <td>'.$sdt.'</td>
                            
                            <td>'.$ngaydathang.'</td>
                            <td>'.$tongdonhang.'</td>
                            <td>'.$tt.'</td>
                            <td> <a href="'.$suasp.'"><button class="btn btn-primary" type="button">Chi tiet</button></a>
                             </td>
                            </tr>
                            ';
                        }
                    ?>
                   
                   </table>
                </div>
                
            </form>
        </div>
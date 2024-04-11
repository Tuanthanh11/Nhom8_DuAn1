<!-- Shop Start -->
<div class="container-fluid pt-5">
        <div class="row px-xl-5">
           
            <div class="">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="font-weight-semi-bold">Sản phẩm <?=$tendm?></h5>
                            
                        </div>
                    </div>

                    <?php

                        foreach ($listsp as $sp) {
                            extract($sp);
                            $anh=$image.$hinhanh;

                            $idsp="index.php?act=sanphamct&idsp=".$id;
                            echo'<div class="col-lg-3 col-md-5 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                            <input type="hidden" name="id" value="'.$id.'">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <a href="'.$idsp.'"><img class="img-fluid w-100" src="'.$anh.'" alt=""></a>
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3">'.$tensp.'</h6>
                                    <div class="d-flex justify-content-center">
                                        <h6>$'.$gia.'</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="'.$idsp.'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                    <a href="'.$idsp.'" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
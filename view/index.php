<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include 'header.php';
    include '../global.php';

    $spnew = load_sp_home();
    $spnewnam = load_sp_homenam();
    $spnewnu = load_sp_homenu();

    // /$spcl = loadone_sanphamcl($product_id,$cate_id);
    
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
            case 'chitietsanpham':
                
                if(isset($_GET['product_id']) && $_GET['product_id'] > 0){
                    $product_id = $_GET['product_id'];
                    $onesp = loadone_sanpham($product_id);
                    extract($onesp);
                    $spcl = loadone_sanphamcl($product_id,$cate_id);
                    $dstop4 = load_all_top4();
                    include 'chitietsanpham.php';
                }else{
                    include 'home.php';
                }
                
                break;
            case 'gioithieu':
                include 'gioithieu.php';
                break;
            
            default:
                include 'home.php';
                break;
        }
    }else {
        include 'home.php';
    }
    
    include 'footer.php';
?>
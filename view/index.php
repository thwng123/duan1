<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include 'header.php';
    include '../global.php';

    $spnew = load_sp_home();
    $spnewnam = load_sp_homenam();
    $spnewnu = load_sp_homenu();
    $blog = load_blog_home();

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
            case 'nam':
                $spnewnam = load_all_homenam();
                include 'nam.php';
                break;
            case 'nu':
                $spnewnu = load_all_homenu();
                include 'nu.php';
                break;

            case 'dangnhap':
               
                include 'dangnhap.php';
                break;

            case 'search':
              
                if(isset($_POST['btn'])){
                    $kyw = $_POST['kyw'];
                }else {
                    $kyw = "";
                }
                
                $pro = searchProduct($kyw);
          
                include 'search.php';
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
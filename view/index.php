<?php
    include 'header.php';

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
            case 'chitietsanpham':
                include 'chitietsanpham.php';
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
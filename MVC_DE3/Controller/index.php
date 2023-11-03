<?php
session_start();
if(!isset($_SESSION['dangnhap'])) $_SESSION['dangnhap'] = [];
if(isset($_REQUEST['act'])){
    $act = $_REQUEST['act'];
    switch($act)
    {
        // chuc nang admin
        case "admin":
                if($_SESSION['dangnhap'][0][7]==0)
                {
                include "./../View/headeradmin.php";
                include "./../View/body-admin.php";
                break;
                }else if($_SESSION['dangnhap']==0)
                {
                 header ('Location: index.php?act=404');
                 break;        
                }
        // chuc nang user
        case "404":
                include "./../View/404.php";
                break;
        case "user":
                include "./../View/header-active.php";
                include "./../View/body.php";
                include "./../View/footer.php";
                break;
        case "update_info":
                // include "./../View/header-active.php";
                include "./../View/edit_user.php";
                // include "./../View/footer.php";
                break;
        case "taouser":
                include "./../View/taouser.php";
                break;
        case "dangnhap":
                include "./../View/dangnhap.php";
                break;
        case "change_pass":
                include "./../View/doimatkhau.php";
                break;        
    }
}
else
{
    include "./../View/header.php";
    include "./../View/footer.php";
}

?>

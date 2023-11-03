<?php
 include "./../Model/xl_user.php";
 $edit;
 $id_user = $_SESSION['dangnhap'][0][0];
 $load_user = mot_user('taikhoan',$_SESSION['dangnhap'][0][1],$_SESSION['dangnhap'][0][2]);

 if(isset($_REQUEST['edit'])){
    $edit = $_REQUEST['edit'];
    // if($edit == 0){
    //     $id_user = $_SESSION['dangnhap'][0][0];
    // }
    if($edit ==1)
    {
        $pass = md5($_POST['pass']);
        capnhat_pass($id_user, $pass);
    }
}
?>
    <div>
    <form name="" action="index.php?act=change_pass&edit=1" method="post" enctype="multipart/form-data">
        <span>Nhập mật khẩu mới:</span> <input name="pass" placeholder="Nhập mật khẩu mới ?"><br>  <br>
        <button type="submit">Cập Nhật</button>
        </form>
    </div>
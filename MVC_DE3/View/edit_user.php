<?php
 include "./../Model/xl_user.php";
 $edit;
 $load_user = mot_user('taikhoan',$_SESSION['dangnhap'][0][1],$_SESSION['dangnhap'][0][2]);
 if(isset($_REQUEST['edit'])){
    $edit = $_REQUEST['edit'];
    // if($edit == 0){
    //     $id_user = $_SESSION['dangnhap'][0][0];
    // }
    if($edit ==1)
    {
        $id_user = $_SESSION['dangnhap'][0][0];
        $name_user = $_POST['ten'];
        $email_user = $_POST['email'];
        $address_user = $_POST['diachi'];
        $phone_user = $_POST['sdt'];
        // $hinhsp = $_POST['hinh_cu'];
        // if(isset($_FILES['hinh_moi'])){  
        //     if( $_FILES['hinh_moi']['name'] != ""){
        //         $hinhsp = basename($_FILES['hinh_moi']['name']) ;
        //         $path = __DIR__ . './../View/img/';
        //         $target_file = $path . $hinhsp;
        //         move_uploaded_file($_FILES['hinh_moi']['tmp_name'], $target_file);
        //         unlink("./../View/img/".$_POST['hinh_cu'] );
        //     }
        // }
        capnhat_user($id_user, $name_user, $email_user,$phone_user,$address_user);
    }
}
?>
    <div>
    <form name="" action="index.php?act=update_info&edit=1" method="post" enctype="multipart/form-data">
        <span>Tên người dùng:</span> <input type="text" name="ten" value="<?=$load_user[0][3]?>"><br>
        <span>Email:</span> <input type="email" name="email" value="<?=$load_user[0][4]?>"><br>
        <span>Số điện thoại</span> <input style="width:100px" type="number" max="1000000000" name="sdt" value="<?=$load_user[0][5]?>"><br>
        <span>Địa chỉ:</span> <input name="diachi" value="<?=$load_user[0][6]?>"><br>  <br>
        <button type="submit">Cập Nhật</button>
        </form>
    </div>
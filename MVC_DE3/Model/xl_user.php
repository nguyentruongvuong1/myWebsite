<?php
include "database.php";
function id($tenbang)
{
    $conn = connection_database();
    $sql = "SELECT * FROM ".$tenbang." ORDER BY id_user desc limit 1";
    $goiid = $conn->query($sql);
    $danhsach = $goiid->fetch();
    return $danhsach;

}
function them_user($id_new,$username,$password,
    $fullname,$email,$phone,$address,$position){
        $conn = connection_database();
        $sql = "INSERT INTO taikhoan VALUES( ".$id_new.",
         '".$username."','".$password."' ,
         '".$fullname."','".$email."','".$phone."',
         '".$address."','".$position."'  
        )";
        // echo($sql);
        $conn->query($sql); 
    }
    function mot_user($tenbang,$username,$password){
        $conn = connection_database();
        $sql = "select * from ".$tenbang." where username = '".$username."' and password = '".$password."'";
        $result = $conn->query($sql);
        $danhsach = $result->fetchAll();
        return $danhsach;
    }
    function capnhat_user($id_user, $name_user, $email_user,$phone_user,$address_user){
        $conn = connection_database();
        $sql =  "UPDATE taikhoan 
                SET fullname='". $name_user ."', 
                email='". $email_user ."',
                phone='". $phone_user."',
                address ='".$address_user."', 
                position=1 
                WHERE id_user = ".$id_user;
       $conn->query($sql);
       echo'
        <script type="text/javascript">
        function confirm_alert(node) {
            return confirm("Nhấn OK để quay lại trang chủ");
        }
        </script>
        <a href="index.php?act=user" onclick="return confirm_alert(this);">Sửa thành công ! Click để quay lại trang chủ</a>';
    //    header ('Location: index.php?act=update_info');
       
      }
      function capnhat_pass($id_user, $pass){
        $conn = connection_database();
        $sql =  "UPDATE taikhoan 
                SET password='".$pass."' 
                WHERE id_user = ".$id_user;
       $conn->query($sql);
       echo'
        <script type="text/javascript">
        function confirm_alert(node) {
            return confirm("Nhấn OK để quay lại trang ĐĂNG NHẬP");
        }
        </script>
        <a href="index.php?act=dangnhap" onclick="return confirm_alert(this);">Sửa mật khẩu thành công ! Click để đăng nhập lại !</a>';
    //    header ('Location: index.php?act=update_info');
       
      }
      function load($id){
        $conn = connection_database();
        $sql = "select * from taikhoan where id_user =".$id;
        $result = $conn->query($sql);
        $danhsach = $result->fetchAll();
        return $danhsach;
    }
?>
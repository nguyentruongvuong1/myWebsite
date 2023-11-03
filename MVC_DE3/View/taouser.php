<?php
    include "./../Model/xl_user.php";
    $username = "";
    $password = "";
    $password_fir = "";
    $fullname = "";
    $email = "";
    $phone = "";
    $address = "";
    $position = "";
    $goiid = id("taikhoan");
    $id_new = $goiid['id_user'] + 1;
    // $id_user ="";
    $flag = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {   
        // if(empty($_POST["id_user"]))
        // { echo ("Bạn chưa nhập ID<br>"); $flag = 0; }
        // else 
        // {$id_user = $_POST['id_user'];$flag = 1;}
        if(empty($_POST["username"]))
        { echo ("Bạn chưa nhập tài khoản<br>"); $flag = 0;}
        else
        {$username = $_POST['username'];$flag = 1;}   
        if(empty($_POST["password"]))
        { echo ("Bạn chưa nhập mật khẩu<br>"); $flag = 0;}
        else
        {$password = $_POST['password'];}   
        // if(empty($_POST["password_fir"]))
        // { echo ("Bạn chưa nhập xác nhận mật khẩu<br>"); $flag = 0;}
        // else 
        // {$password_fir = $_POST['password_fir'];
        //     if($password == $password_fir)
        //     {$flag == 1;}
        //     else
        //     {echo ("Mật khẩu không trùng khớp. Vui lòng nhập lại<br>");$flag == 0;}
        // }
        if(empty($_POST["fullname"]))
        { echo ("Bạn chưa nhập Họ và Tên<br>"); $flag = 0;}
        else 
        {$fullname = $_POST['fullname'];$flag = 1;}   
        if(empty($_POST["email"]))
        { echo ("Bạn chưa nhập địa chỉ Email<br>"); $flag = 0;}
        else
        {$email = $_POST['email'];$flag = 1;}   
        if(empty($_POST["phone"]))
        { echo ("Bạn chưa nhập số điện thoại<br>"); $flag = 0;}
        else
        {$phone = $_POST['phone'];$flag = 1;}   
        if(empty($_POST["address"]))
        { echo ("Bạn chưa nhập địa chỉ<br>"); $flag = 0; 
        }
        else 
        {$address = $_POST['address'];$flag = 1;}  
        if($flag==1)
        {
            $umd = md5($username);
            $pmd = md5($password);
            them_user($id_new,$umd,$pmd, 
            $fullname,$email,$phone,$address,1);
            echo ("CHÚC MỪNG BẠN ĐÃ TẠO TÀI KHOẢN THÀNH CÔNG !<br>");
            echo ("<a href=index.php?act=dangnhap>ĐĂNG NHẬP TÀI KHOẢN</a>");
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./../View/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
</head>
<body>
<div>
        <h1>Đăng ký tài khoản</h1>
        <form action="index.php?act=taouser" method="post" enctype="multipart/form-data">
        <!-- ID <span>(*)</span>: <br> <input type="number" name="id_user" value=""><br> -->
        Tài khoản <span>(*)</span>: <br> <input type="text" name="username" value=""><br>
        Mật khẩu <span>(*)</span>: <br> <input type="password" name="password" value=""><br>
        <!-- Xác nhận mật khẩu<span>(*)</span>: <br> <input type="password" name="password_fir" value=""><br> -->
        Họ và tên <span>(*)</span> :<br> <input type="text" name="fullname" value=""><br>
        Email liên hệ <span>(*)</span>:<br> <input type="email" name="email" value=""><br>
        Số điện thoại <span>(*)</span>:<br> <input type="number" name="phone" value="" max="1000000000"><br>
        Địa chỉ <span>(*)</span>:<br> <input type="text" name="address" value=""><br>
        <button type="submit">Đăng kí</button>
        </form>
    </div>
</body>
</html>
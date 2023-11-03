<?php
include "./../model/xl_user.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = md5($_POST["username"]);
    $password = md5($_POST['password']);
        $tk = mot_user("taikhoan", $username, $password);
        if (!empty($tk)) { 
            $_SESSION['dangnhap'] = $tk;
            if ($tk[0]["position"] == 0) {
                header("Location: index.php?act=admin");
            }
            if ($tk[0]["position"] == 1) {
                header("Location: index.php?act=user");
            }
        } else {
            $error_message = "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
}
?>
    <div>
        <h1>ĐĂNG NHẬP</h1>
        <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data" >
            Username : 
            <br>
            <input type="text" name="username" value="" required>
            <br>
            Password :
            <br>
            <input type="password" name="password" value="" required>
            <br>
            <button>SUBMIT</button>
        </form>
        <?php if (isset($error_message)): 
        
        ?>
            <div class="error">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
    </div>
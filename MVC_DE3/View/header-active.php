<?php
 include ('./../Model/xl_user.php');
$load = load($_SESSION['dangnhap'][0][0]);
?>
<a>Xin chào</span> <span style="font-weight: bold"><?=$load[0][3]?></span></a>
<a href="index.php?act=update_info">Chỉnh sửa</a>
<a href="index.php?act=change_pass">Đổi mật khẩu</a>
<a href="index.php">Đăng xuất</a>
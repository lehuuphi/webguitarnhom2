<?php 
    include('module/config.php');
    session_start();
        if(isset($_POST['login'])){
            $taikhoan = $_POST['Taikhoan'];
            $matkhau = $_POST['Matkhau'];
            $sql="select * from quantrivien where Taikhoan='$taikhoan' and Matkhau='$matkhau' limit 1";
            $query=mysqli_query($conn,$sql);
            $nums=mysqli_num_rows($query);
            if($nums>0){
                $_SESSION['login']=$taikhoan;
                header('location:index.php');
            }else{
                echo 'Tài khoản mật khẩu không chính xác';
            }
        }
?>
<div class="login">
<form action="" method="post" enctype="multipart/form-data">
    <div class="login-form">
        <h2 class="login-heading">ĐĂNG NHẬP HỆ THỐNG</h2>
        <div class="login-input">
            <p class="login__text">
                Mã Quản Trị Viên
            </p>
            <input type="text" name="Taikhoan">
        </div>
        <div class="login-input">
            <p class="login__text">
                Mật Khẩu
            </p>
            <input type="password" name="Matkhau">
        </div>
    <input class="btn" type="submit" name="login" id="login" value="ĐĂNG NHẬP">
    </div>
</form>
</div>

<style>
    .login{
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
    .login-form{
        padding: 60px;
        background-image: linear-gradient(#ee4d2d,#ff7337);
        color:white;
        border-radius: 5px;
    }
    .btn{
        margin-top:20px
    }
</style>
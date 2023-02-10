<?php
	@session_start();
    include('admin/module/config.php');
  if (isset($_SESSION['dangnhap'])) {
    // da dang nhap
    header("location: index.php");
  }
	if(isset($_POST['dangnhap'])){
		$email=$_POST['Email'];
		$matkhau=$_POST['Matkhau'];
		$sql_dangnhap="select * from khachhang where Email='$email' and Matkhau='$matkhau'";
		$run_dangnhap=mysqli_query($conn,$sql_dangnhap);
		$dangnhap=mysqli_fetch_array($run_dangnhap);
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if($count_dangnhap==0){
			echo '<script>alert("Sai tài khoản hoặc mật khẩu ! Xin mời nhập lại .")</script>';
		}else{
      $_SESSION['dangnhap']=$dangnhap['Email'];
			header('location:index.php');
		}
	}
?>
<title>Đăng nhập</title>
<div class="login-box">
  <h2>Login</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user-box">
      <input type="text" name="Email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="Matkhau" required="">
      <label>Password</label>
    </div>
    <a href="">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input class="btn" type="submit" name="dangnhap" value="Submit" id="dangnhap">
    </a>
  </form>
</div>

<style>
:root{
    --primary-color:#ff8000;
}    
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}
.btn{
    border: none;
    background-color:transparent;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 10px;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: var(--primary-color);
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: var(--primary-color);
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: var(--primary-color);
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px var(--primary-color),
              0 0 25px var(--primary-color),
              0 0 50px var(--primary-color),
              0 0 100px var(--primary-color);
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, var(--primary-color));
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, var(--primary-color));
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, var(--primary-color));
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, var(--primary-color));
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>
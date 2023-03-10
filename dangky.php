<?php

	@session_start();
    include('admin/module/config.php');
	if(isset($_POST['dangky'])){
		$tenkh=$_POST['TenKH'];
		$matkhau=$_POST['Matkhau'];
		$email=$_POST['Email'];
		$diachi=$_POST['Diachi'];
		$sdt=$_POST['Sdt'];
		$sql_dangky="insert into khachhang (TenKH,Matkhau,Email,Diachi,Sdt) value('$tenkh','$matkhau','$email','$diachi','$sdt')";
		$run_query=mysqli_query($conn,$sql_dangky);
		if($run_query){
			header('location:dangnhap.php');
		}else{
			header('location:dangky.php');
		}
	}
?>
<title>Đăng ký</title>
<div class="container">

    <form action="dangky.php" method="post" enctype="multipart/form-data" id="signup">

        <div class="header">
        
            <h3>Sign Up</h3>
            
            <p>You want to fill out this form</p>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
            <p>Nhập họ và tên</p>
            <input type="text" name="TenKH" placeholder="Nhập họ và tên">
            <p>Nhập Email</p>
            <input type="email" name=" Email" placeholder="E-mail" autofocus />
            <p>Nhập mật khẩu</p>
            <input type="password" name="Matkhau" placeholder="Password" />
            <p>Nhập địa chỉ</p>
            <input type="text" name="Diachi" placeholder="Nhập địa chỉ">
            <p>Nhập số điện thoại</p>
            <input type="tel" name="Sdt" placeholder="Nhập số điện thoại">
        </div>
        <div align="center">
            <input class="btn" type="submit" name="dangky" value="ĐĂNG KÝ">
        </div>

    </form>

</div>

<style>
    body {
    /*background-image: url(http://kreativo.se/backlogin.jpg);*/
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8be8cf), color-stop(100%,#cdeb8b));
  
  
    font-family: "Helvetica Neue", Helvetica, Arial;
    padding-top: 20px;
}
    .container {
    width: 406px;
    max-width: 406px;
    margin: 0 auto;
}

#signup {
    padding: 20px 25px 25px;
    background: #fff;
    box-shadow: 
        0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
        0px 4px 20px rgba( 0,0,0,0.33 );
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    display: table;
    position: static;
}

#signup .header {
    margin-bottom: 20px;
}

#signup .header h3 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

#signup .header p {
    color: #8f8f8f;
    font-size: 14px;
    font-weight: 300;
}

#signup .sep {
    height: 1px;
    background: #e8e8e8;
    width: 406px;
    margin: 0px -25px;
}

#signup .inputs {
    margin-top: 25px;
}

#signup .inputs label {
    color: #8f8f8f;
    font-size: 12px;
    font-weight: 300;
    letter-spacing: 1px;
    margin-bottom: 7px;
    display: block;
}

input::-webkit-input-placeholder {
    color:    #b5b5b5;
}

input:-moz-placeholder {
    color:    #b5b5b5;
}

#signup .inputs input {
    background: #f5f5f5;
    font-size: 0.8rem;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    padding: 13px 10px;
    width: 330px;
    box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
    clear: both;
}

#signup .inputs input:focus {
    background: #fff;
    box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
    outline: none;   
}


#signup .inputs label.terms {
    float: left;
    font-size: 14px;
    font-style: italic;
}

#signup .inputs #submit {
    width: 100%;
    margin-top: 20px;
    padding: 15px 0;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: none;
        background: -moz-linear-gradient(
        top,
        #b9c5dd 0%,
        #a4b0cb);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#b9c5dd),
        to(#a4b0cb));
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #737b8d;
    -moz-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    -webkit-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    text-shadow:
        0px 1px 3px rgba(000,000,000,0.3),
        0px 0px 0px rgba(255,255,255,0);
    display: table;
    position: static;
    clear: both;
}

#signup .inputs #submit:hover {
    background: -moz-linear-gradient(
        top,
        #a4b0cb 0%,
        #b9c5dd);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#a4b0cb),
        to(#b9c5dd));
}
.btn {
    padding: 6px 24px;
    margin-top: 20px;
}
</style>
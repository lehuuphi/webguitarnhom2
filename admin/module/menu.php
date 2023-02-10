<?php 
	if(isset($_GET['ac']) && $_GET['ac']=='logout'){
		unset($_SESSION['login']);
		header('location:login.php');
		}
?>
<ul class="menu">
    <li class="menu-list"><a href="index.php?Quanly=QuanlyDM&action=Them">Quản lý danh mục</a></li>
    <li class="menu-list"><a href="index.php?Quanly=QuanlyNCC&action=Them">Quản lý nhà cung cấp</a></li>
    <li class="menu-list"><a href="index.php?Quanly=QuanlySP&action=Them">Quản lý sản phẩm</a></li>
    <li class="menu-list"><a href="index.php?Quanly=QuanlyNV&action=Them">Quản lý nhân viên</a></li>
    <li class="menu-list"><a href="index.php?Quanly=Xulyhoadon">Xử lý hoá đơn</a></li>
    <li class="menu-list"><a href="index.php?Quanly=donhang">Quản lý đơn hàng</a></li>
    <li class="menu-list"><a href="index.php?Quanly=doanhthu">Doanh thu</a></li>
    <li class="menu-list"><a href="index.php?ac=logout">Đăng xuất</a></li>
</ul>

<style>
    .menu li a{
        display: block;
    }
</style>
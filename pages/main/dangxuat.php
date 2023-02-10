<?php
	if(isset($_SESSION['dangnhap'])){
		unset($_SESSION['dangnhap']);
		header('location: index.php');
	}
?>
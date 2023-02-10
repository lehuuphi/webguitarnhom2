<?php
	@session_start();
	include('admin/module/config.php');
	//
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['dangnhap']);
		header('location:index.php?xem=giohang');
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				
				$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'Dongia'=>$cart_item['Dongia']);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item['soluong']-1;
				if($cart_item['soluong']>1){
				$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$giam,'Dongia'=>$cart_item['Dongia']);
				
				}else{
					$giam=1;
					$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$giam,'Dongia'=>$cart_item['Dongia']);
				}
				$_SESSION['product']=$product;
			}

			header('location:index.php?xem=giohang');
		}
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'Dongia'=>$cart_item['Dongia']);
				$_SESSION['product']=$product;
			}else{
				$tang=$cart_item['soluong']+1;
				if($cart_item['soluong']<9){
				
				$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$tang,'Dongia'=>$cart_item['Dongia']);
				
			}else{
				
				$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'Dongia'=>$cart_item['Dongia']);
			}
			$_SESSION['product']=$product;
			}
			
			header('location:index.php?xem=giohang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['product'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['product'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'Dongia'=>$cart_item['Dongia']);
			}
		$_SESSION['product']=$product;
		header('location:index.php?xem=giohang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?xem=giohang');
	}
	//them giohang
	if(isset($_POST['Mua'])){
		$id=$_GET['id'];
		$soluong=$_POST['soluong'];
		$sql="select * from sanpham where MaSP ='$id' limit 1";
		$row=mysqli_query($conn,$sql);
		$dong=mysqli_fetch_array($row);
		if($dong){
			$new_product=array(array('TenSP'=>$dong['TenSP'],'id'=>$id,'soluong'=>$soluong,'Dongia'=>$dong['Dongia']));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_item){
					if($cart_item['id'] == $id){
						$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$soluong,'Dongia'=>$cart_item['Dongia']);
						$found=true;
					}else{
						$product[]=array('TenSP'=>$cart_item['TenSP'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'Dongia'=>$cart_item['Dongia']);
					}
					
				}if($found==false){
					$_SESSION['product']=array_merge($product,$new_product);
				}else{
					$_SESSION['product']=$product;
				}
			}else{
				$_SESSION['product']=$new_product;
			}
		}
		header('location:index.php?xem=giohang');
	}
?>



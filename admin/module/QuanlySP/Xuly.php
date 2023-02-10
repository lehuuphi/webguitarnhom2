<?php 
    include('../config.php');
    $MaSP=$_POST['MaSP'];
    $MaDM=$_POST['MaDM'];
    $MaNCC=$_POST['MaNCC'];
    $TenSP=$_POST['TenSP'];
    $AnhSP=$_FILES['AnhSP']['name'];
	$AnhSP_tmp=$_FILES['AnhSP']['tmp_name'];
	move_uploaded_file($AnhSP_tmp,'img/'.$AnhSP);
    $Soluong=$_POST['Soluong'];
    $Mota=$_POST['Mota'];
    $Dongia=$_POST['Dongia'];
    $id=$_GET['id'];
        if(isset($_POST['Them']))
        {
            //thêm 
            $sql="insert into sanpham (MaSP,MaDM,MaNCC,TenSP,AnhSP,Soluong,Mota,Dongia)
             values('$MaSP','$MaDM','$MaNCC','$TenSP','$AnhSP','$Soluong','$Mota','$Dongia')";
             if(!mysqli_query($conn,$sql)){
              die('Lỗi sql:'.mysqli_error($conn));}
             header('location:../../index.php?Quanly=QuanlySP&action=Them');
        }
        else
        if (isset($_POST['Sua'])) {
            //sửa
             $sql="update sanpham set MaSP='$MaSP',MaDM='$MaDM',MaNCC='$MaNCC',TenNCC='$TenNCC',AnhSP='$AnhSP',Soluong='$Soluong',Mota='$Mota',Dongia='$Dongia' where MaSP ='$id'";
            mysqli_query($conn, $sql);
             header('location:../../index.php?Quanly=QuanlySP&action=Sua&id='.$id);
       }
       else{
		//xoá
             $sql=" delete from sanpham where MaSP='$id'";
            mysqli_query($conn,$sql);
            header('location:../../index.php?Quanly=QuanlySP&action=Them');
   }


?>
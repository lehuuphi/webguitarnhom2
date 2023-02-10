<?php 
    include('../config.php');
    $MaNV=$_POST['MaNV'];
    $TenNV=$_POST['TenNV'];
    $CMND=$_POST['CMND'];
    $SDT=$_POST['SDT'];
    $Matkhau=$_POST['Matkhau'];
    $Bophan=$_POST['Bophan'];
    $Mucluong=$_POST['Mucluong'];
    $id=$_GET['id'];
        if(isset($_POST['Them']))
        {
            //thêm 
            $sql="insert into nhanvien (MaNV,TenNV,CMND,SDT,Matkhau,Bophan,Mucluong)
             values('$MaNV','$TenNV','$CMND','$SDT','$Matkhau','$Bophan','$Mucluong')";
             if(!mysqli_query($conn,$sql)){
              die('Lỗi sql:'.mysqli_error($conn));}
             header('location:../../index.php?Quanly=QuanlyNV&action=Them');
        }
        else
        if (isset($_POST['Sua'])) {
            //sửa
             $sql="update nhanvien set MaNV='$MaNV',TenNV='$TenNV',CMND='$CMND',SDT='$SDT',Matkhau='$Matkhau',Bophan='$Bophan',Mucluong='$Mucluong' where MaNV ='$id'";
            mysqli_query($conn, $sql);
             header('location:../../index.php?Quanly=QuanlyNV&action=Sua&id='.$id);
       }
       else{
		//xoá
             $sql=" delete from nhaNVIEN where MaNV='$id'";
            mysqli_query($conn,$sql);
            header('location:../../index.php?Quanly=QuanlyNV&action=Them');
   }

?>
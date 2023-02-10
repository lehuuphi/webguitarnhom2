<?php 
    include('../config.php');
    $MaDM=$_POST['MaDM'];
    $TenDM=$_POST['TenDM'];
    $id=$_GET['id'];
        if(isset($_POST['Them']))
        {
            //thêm 
            $sql="insert into danhmuc (MaDM,TenDM)
             values('$MaDM','$TenDM')";
             if(!mysqli_query($conn,$sql)){
              die('Lỗi sql:'.mysqli_error($conn));}
             header('location:../../index.php?Quanly=QuanlyDM&action=Them');
        }
        else
        if (isset($_POST['Sua'])) {
            //sửa
             $sql="update danhmuc set MaDM='$MaDM',TenDM='$TenDM' where MaDM='$id'";
            mysqli_query($conn, $sql);
             header('location:../../index.php?Quanly=QuanlyDM&action=Sua&id='.$id);
       }
       else{
		//xoá
             $sql=" delete  from danhmuc where MaDM='$id'";
            mysqli_query($conn,$sql);
            header('location:../../index.php?Quanly=QuanlyDM&action=Them');
   }
?>
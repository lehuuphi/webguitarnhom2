<?php 
    include('../config.php');
    $MaNCC=$_POST['MaNCC'];
    $TenNCC=$_POST['TenNCC'];
    $id=$_GET['id'];
        if(isset($_POST['Them']))
        {
            //thêm 
            $sql="insert into nhacungcap (MaNCC,TenNCC)
             values('$MaNCC','$TenNCC')";
             if(!mysqli_query($conn,$sql)){
              die('Lỗi sql:'.mysqli_error($conn));}
             header('location:../../index.php?Quanly=QuanlyNCC&action=Them');
        }
        else
        if (isset($_POST['Sua'])) {
            //sửa
             $sql="update nhacungcap set MaNCC='$MaNCC',TenNCC='$TenNCC' where MaNCC='$id'";
            mysqli_query($conn, $sql);
             header('location:../../index.php?Quanly=QuanlyNCC&action=Sua&id='.$id);
       }
       else{
		//xoá
             $sql=" delete  from nhacungcap where MaNCC='$id'";
            mysqli_query($conn,$sql);
            header('location:../../index.php?Quanly=QuanlyNCC&action=Them');
   }

?>
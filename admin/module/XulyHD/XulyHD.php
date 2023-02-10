<?php 
$sql= "select * from chitietphieudat ";
$query=mysqli_query($conn,$sql);
?>
<form action="index.php?Quanly=Xulyhoadon" method="post" enctype="multipart/form-data">
<table class="table" border="1">
  <tr class="table-header">
    <td>Mã Phiếu Đặt</td>
    <td>Mã Sản Phẩm</td>
    <td>Tên Sản Phẩm</td>
    <td>Số lượng</td>
    <td>Giá tiền</td>
    <td>Tình trạng </td>
    <td>Quản lý</td>
   </tr>
   <?php 
  while($dong=mysqli_fetch_assoc($query)){
  $MaPD=$dong['MaPD'];
  $TenSP=$dong['TenSP'];  
  $Giatien=$dong['Giatien'];
  $Soluong=$dong['Soluong'];
  $MaSP= $dong['MaSP'];
  ?> 
  <tr>
    <td><?php echo $MaPD ?></td>
    <td><?php echo $MaSP ?></td>
    <td><?php echo $TenSP ?></td> 
    <td><?php echo $Soluong?></td>
    <td><?php echo $dong['Giatien']?></td>
    <td><?php 
        if($dong['Tinhtrang']==0){
	      echo  '<input type="submit" name='.$MaPD.' value="Duyệt">';
	      }
        else 
	      echo  '<p> Đã duyệt</p>';
 	      ?>
    </td>
      <td><a href="index.php?Quanly=Xulyhoadon&id=<?php echo $dong['MaPD']?>">Xoá</a></td>
 </tr>
 <?php 
$Tongtien=0;
if(isset($_POST[$MaPD])){
	$sql2="UPDATE `chitietphieudat` SET `Tinhtrang`=1 WHERE MaPD='$MaPD' "; 
	$query2=mysqli_query($conn,$sql2);
	$sql2="select * from phieudat where MaPD=$MaPD";
  $query2=mysqli_query($conn,$sql2);
  $dong3=mysqli_fetch_assoc($query2);
	$MaKH=$dong3['MaKH'];
	$sql3="insert into hoadon(MaKH,MaNV) value('{$MaKH}',456)";
	$query3=mysqli_query($conn,$sql3);
	//
	$sql4="select * from  hoadon ORDER BY MaHD DESC LIMIT 1";
	$query4=mysqli_query($conn,$sql4);
	$dong4=mysqli_fetch_assoc($query4);
	$MaHD=$dong4['MaHD'];
	//
	$Tongtien=$Soluong*$Giatien;
	$sql5="insert into chitiethoadon(MaHD,MaSP,TenSP,Soluong,Tongtien,Tinhtrang)
	 values ($MaHD,$MaSP,$TenSP,$Soluong,$Tongtien,0)";
	$query5=mysqli_query($conn,$sql5);
}
}
?>
</table>
</form>
<?php 
	//xoa phieudat
 if(isset($_GET['id'])){
	  $id=$_GET['id'];
	  $sql=" delete from chitietphieudat where MaPD='$id'";
  mysqli_query($conn,$sql);
	 }
 
?>

<style>
  .table{
    width: 800px;
    margin-top: 20px;
  }

  .table-header{
    background-color: #33ccff;
  }

  td{
    text-align: center;
    line-height: 30px;
  }
</style>
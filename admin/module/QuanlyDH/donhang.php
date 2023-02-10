<?php 
@session_start(); 
$sql= "select * from chitiethoadon ";
$query=mysqli_query($conn,$sql);
?>
<form action="index.php?Quanly=donhang" method="post" enctype="multipart/form-data">
<table class="table" border="1">
  <tr class="table-header">
    <td>Mã hoá đơn</td>
    <td>Mã sản phẩm</td>
    <td>Tên sản phẩm</td>
    <td>Số lượng</td>
    <td>Tổng tiền</td>
    <td>Tình trạng </td>
    <td colspan="2">Quản lý</td>
   </tr>
   <?php
  while($dong=mysqli_fetch_assoc($query)){
  $MaHD=$dong['MaHD'];
  $TenSP=$dong['TenSP'];
  $Soluong=$dong['Soluong'];
  $MaSP= $dong['MaSP'];
  ?>
<tr>
    <td><?php echo $MaHD ?></td>
    <td><?php echo $MaSP ?></td>
    <td><?php echo $TenSP ?></td>
    <td><?php echo $Soluong?></td>
    <td><?php echo $dong['Tongtien']?></td>
    <td><?php 
    if($dong['Tinhtrang']==0){
	  echo  '<input type="submit" name='.$MaHD.' value="Chưa giao">';
	  }
    else 
	  echo  '<p> Đã giao</p>';
 	 ?></td>
    <td><a href="index.php?Quanly=donhang&id=<?php echo $dong['MaHD']?>">Xoá</a></td>
    <td><a href="index.php?Quanly=inhoadon&id=<?php echo $dong['MaHD']?>"><i class="fa-solid fa-print"></i></a></td>
</tr>
<?php
if(isset($_POST[$MaHD])){
	$sql_upHD="UPDATE chitiethoadon SET `Tinhtrang`=1 WHERE MaHD= $MaHD "; 
	$query_upHD=mysqli_query($conn,$sql_upHD); 
	header('location:index.php?Quanly=donhang');
	//
	$sql_slsp="select * from sanpham where MaSP='$MaSP'";
	$query_slsp=mysqli_query($conn,$sql_slsp);
	$dong_slsp=mysqli_fetch_assoc($query_slsp);
	$TongSL=$dong_slsp['TongSL'];
 	$Soluongmoi= $TongSL-$Soluong; 
	//
	$sql_upsp="update sanpham SET `TongSL`= $Soluongmoi WHERE MaSP=$MaSP ";
	$query_upsp=mysqli_query($conn,$sql_upsp);
}
}
?>
</table>
</form>
<?php 
	//xoa phieudat
 if(isset($_GET['id'])){
	  $id=$_GET['id'];
	  $sql=" delete from chitiethoadon where MaHD='$id'";
  mysqli_query($conn,$sql);
	 }
 
?>

<style>
  .table{
    margin-top: 20px;
    width: 800px;
  }

  .table-header{
    background-color:  #33ccff;
  }
  td{
    line-height: 30px;
    text-align: center;
  }
</style>

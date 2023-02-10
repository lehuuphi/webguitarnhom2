<?php 
 $sql="select * from hoadon where MaHD=$_GET[id]";
 $query=mysqli_query($conn,$sql);
 while($dong=mysqli_fetch_array($query)){
	 $MaHD=$dong['MaHD'];
	 $MaKH=$dong['MaKH'];
	 $MaNV=$dong['MaNV'];
	 $MaNL=$dong['Ngaylap'];
 }
?>

<div class="hoadon">
<table border="3">
  <tr>
    <td colspan="3">Shop guitar</td>
  </tr>
  <tr>
    <td colspan="3">Địa chỉ:54 Triều Khúc,Thanh Xuân,Hà Nội</td>
  </tr>
  <tr>
    <td colspan="3">Tel: 0343507730</td>
  </tr>
  <tr>
    <td colspan="3"><strong><p>HOÁ ĐƠN BÁN HÀNG</p></strong></td>
  </tr>
  <tr>
    <td >Mã HD:<?php echo $MaHD ?></td>
    <td>Nhân viên:<?php echo $MaNV ?></td>
    <td>Ngày lập:<?php echo $MaNL?></td>
  </tr>
  <tr>
    <td colspan="2">Khách hàng:<?php echo $MaKH ?><strong></strong></td>
    <td>Địa chỉ: </td>
  </tr>
  <tr>
  <?php 
  $sql_="select * from chitiethoadon where MaHD= $_GET[id]";
  $query_=mysqli_query($conn,$sql_);
  while($dong_=mysqli_fetch_array($query_)){
	  $MaSP=$dong_['MaSP'];
	  $Soluong=$dong_['Soluong'];
	  $Tongtien=$dong_['Tongtien'];
  }
  ?>
    <td colspan="3"><table border="1">
  		<tr>
    		<td>Mã SP</td>
    		<td>Số lượng</td>
    		<td>Tổng tiền</td>	
  		</tr>
  		<tr>
    		<td><?php echo $MaSP ?></td>
   		 	<td><?php echo $Soluong ?></td>
    		<td><?php echo $Tongtien ?></td>
        </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td colspan="3"><em><p>Cảm ơn quý khách.Hẹn gặp lại!</p></em></td>
  </tr>
</table>
</div>

<style>
  .hoadon{
    margin-top: 30px;
  }
</style>
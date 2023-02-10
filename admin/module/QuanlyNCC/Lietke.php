<?php
 $sql="select * from nhacungcap order by MaNCC desc";
 $run=mysqli_query($conn,$sql);
?>
<table class="listed" border="1">
  <tr style="background-color:#33ccff;">
    <td class=text-heading>Mã NCC</td>
    <td class=text-heading>Tên NCC</td>
    <td colspan="2" class=text-heading>Quản lý</td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td class=text-heading><?php echo $dong['MaNCC']?></td>
    <td class=text-heading><?php echo $dong['TenNCC']?></td>
    <td class=text-heading><a href="index.php?Quanly=QuanlyNCC&action=Sua&id=<?php echo $dong['MaNCC']?>">Sửa</a></td>
    <td class=text-heading><a href="module/QuanlyNCC/Xuly.php?id=<?php echo $dong['MaNCC']?>">Xoá</a></td>
  </tr> 
  <?php
 }
 ?>
 </table> 

 <style>
  .listed{
    width: 100%;
    margin-top: 20px;
  }
  .text-heading{
    text-align: center;
  }
  a{
    text-decoration: none;
  }
  a:hover{
    color: red;
  }
</style>
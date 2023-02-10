<?php
 $sql="select * from sanpham order by MaSP desc";
 $run=mysqli_query($conn,$sql);
?>
<table class="listed" border="1">
  <tr style="background-color:#33ccff;">
    <td class=text-heading>Mã SP</td>
    <td class=text-heading>Mã DM</td>
    <td class=text-heading>Mã NCC</td>
    <td class=text-heading style="width:20%">Tên SP</td>
    <td class=text-heading>Ảnh SP</td>
    <td class=text-heading>Số lượng</td>
    <td class=text-heading style="width:35%">Mô tả</td>
    <td class=text-heading>Đơn giá</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php	
  while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td class=text-heading><?php echo $dong['MaSP']?></td>
    <td class=text-heading><?php echo $dong['MaDM']?></td>
    <td class=text-heading><?php echo $dong['MaNCC']?></td>
    <td class=text-heading><?php echo $dong['TenSP']?></td>
    <td class=text-heading><img src="module/QuanlySP/img/<?php echo $dong['AnhSP']?>" width="80px" height="80px" alt=""></td>
    <td class=text-heading><?php echo $dong['Soluong']?></td>
    <td class=text-heading><?php echo $dong['Mota']?></td>
    <td class=text-heading><?php echo $dong['Dongia']?></td>
    <td class=text-heading><a href="index.php?Quanly=QuanlySP&action=Sua&id=<?php echo $dong['MaSP']?>">Sửa</a></td>
    <td class=text-heading><a href="module/QuanlySP/Xuly.php?id=<?php echo $dong['MaSP']?>">Xoá</a></td>
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
  a{
    text-decoration: none;
  }
  a:hover{
    color: red;
  }
</style>

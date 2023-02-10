<?php
 $sql="select * from nhanvien order by MaNV desc";
 $run=mysqli_query($conn,$sql);
?>
<table class="listed" border="1">
  <tr style="background-color:#33ccff;">
    <td class=text-heading style="width:10%">MÃ NV</td>
    <td class=text-heading style="width:15%">TÊN NHÂN VIÊN</td>
    <td class=text-heading style="width:12%">CMND</td>
    <td class=text-heading style="width:12%">SDT</td>
    <td class=text-heading style="width:15%">BỘ PHẬN</td>
    <td class=text-heading style="width:15%">MỨC LƯƠNG</td>
    <td class=text-heading>MẬT KHẨU</td>
    <td class=text-heading colspan="2">QUẢN LÝ</td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td class=text-heading><?php echo $dong['MaNV']?></td>
    <td class=text-heading><?php echo $dong['TenNV']?></td>
    <td class=text-heading><?php echo $dong['CMND']?></td>
    <td class=text-heading><?php echo $dong['SDT']?></td>
    <td class=text-heading><?php echo $dong['Bophan']?></td>
    <td class=text-heading><?php echo $dong['Mucluong']?></td>
    <td class=text-heading><?php echo $dong['Matkhau']?></td>
    <td class=text-heading><a href="index.php?Quanly=QuanlyNV&action=Sua&id=<?php echo $dong['MaNV']?>">Sửa</a></td>
    <td class=text-heading><a href="module/QuanlyNV/Xuly.php?id=<?php echo $dong['MaNV']?>">Xoá</a></td>
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
</style>
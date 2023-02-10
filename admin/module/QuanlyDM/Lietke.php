<?php
 $sql="select * from danhmuc order by MaDM desc";
 $run=mysqli_query($conn,$sql);
?>
<table class="listed" border="1">
  <tr style="background-color:#33ccff;">
    <td class=text-heading>MÃ DANH MỤC</td>
    <td class=text-heading>TÊN DANH MỤC</td>
    <td colspan="2" class="text-heading">QUẢN LÝ</td>
  </tr>
  <?php	
   while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td class=text-heading><?php echo $dong['MaDM']?></td>
    <td class=text-heading><?php echo $dong['TenDM']?></td>
    <td class=text-heading><a href="index.php?Quanly=QuanlyDM&action=Sua&id=<?php echo $dong['MaDM']?>">Sửa</a></td>
    <td class=text-heading><a href="module/QuanlyDM/Xuly.php?id=<?php echo $dong['MaDM']?>">Xoá</a></td>
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
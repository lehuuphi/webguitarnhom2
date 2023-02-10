<?php
 $sql="select * from sanpham where MaSP='$_GET[id]'";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="module/QuanlySP/Xuly.php?id=<?php echo $dong['MaSP'] ?>" method="post" enctype="multipart/form-data">
<table class="add" border="1">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">Sửa Sản Phẩm</p></td>
  </tr>
   <tr class="form-input">
    <td >Mã SP</td>
    <td  ><input class="input" type="text" name="MaSP" value="<?php echo $dong['MaSP']?>"></td>
  </tr>
  <tr class="form-input">
  <?php 
	$sql=" select * from danhmuc";
	$run=mysqli_query($conn,$sql);
  ?>
    <td >Mã DM</td>
    <td><select name="MaDM">
    <?php
	  while($dong=mysqli_fetch_array($run)){
	  ?>
    <option class="input" value="<?php echo $dong['MaDM']?> "><?php echo $dong['MaDM']?> </option>
    <?php
	  }
	  ?>
    </select>
    </td>
  </tr>
  <?php 
	$sql=" select * from nhacungcap";
	$run=mysqli_query($conn,$sql);
  ?>
  <tr class="form-input">
    <td >Mã NCC</td>
    <td><select name="MaNCC">
    <?php
	  while($dong=mysqli_fetch_array($run)){
	  ?>
    <option class="input" value="<?php echo $dong['MaNCC']?>"><?php echo $dong['MaNCC']?></option>
    <?php
	 }
	 ?>
    </select>
    </td>
  </tr>
  <tr class="form-input">
    <td >Tên SP </td>
    <td><input class="input" type="text" name="TenSP"  value="<?php echo $dong['TenSP']?>"></td>
  </tr>
  <tr class="form-input">
    <td >Ảnh SP </td>
    <td><input class="input" type="file" name="AnhSP">
    <img src="module/QuanlySP/img/<?php echo $dong['AnhSP']?>" width="80px" height="80px"> </td>
  </tr>
   <tr class="form-input">
    <td >Số lượng</td>
    <td><input class="input" type="text" name="Soluong"  value="<?php echo $dong['Soluong']?>"></td>
  </tr>
  <tr class="form-input">
    <td >Mô tả</td>
    <td><textarea class="input" name="Mota"><?php echo $dong['Mota']?></textarea></td>
  </tr>
  <tr>
    <td class="form-input">Đơn giá</td>
    <td><input class="input" type="text" name="Dongia"  value="<?php echo $dong['Dongia']?>"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input class="btn"type="submit" name="Sua" id="Sua" value="Sửa">
    </td>
  </tr>
</table>
</form>


<style>
  .add{
    width: 75%;
    margin-top: 20px;
  }
  .input{
    width: 98%;
    padding: 5px 0;
  }
  .text-heading{
    line-height: 30px;
    text-align: center;
  }
  .form-input{
    margin-top: 10px;
  }
  .btn{
    margin-top: 10px;
    padding: 6px 14px;
  }
</style>

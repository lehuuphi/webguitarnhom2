<form action="module/QuanlySP/Xuly.php" method="post" enctype="multipart/form-data">
<table  border="1" class="add">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">Thêm Sản Phẩm</p></td>
  </tr>
  <tr class="form-input">
    <td>Mã SP</td>
   <td><input class="input" type="text" name="MaSP"></td>
  </tr>
  <?php 
	$sql=" select * from danhmuc";
	$run=mysqli_query($conn,$sql);
  ?>
  <tr class="form-input">
    <td >Mã DM</td>
    <td><select name="MaDM">
    <?php
	  while($dong=mysqli_fetch_array($run))
    {
	  ?>
    <option value="<?php echo $dong['MaDM'] ?>"><?php echo $dong['MaDM'] ?></option>
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
    <option value="<?php echo $dong['MaNCC'] ?>"><?php echo $dong['MaNCC'] ?></option>
    <?php
	  }
	  ?>
    </select>
    </td>
  </tr>
   
  <tr class="form-input">
    <td >Tên SP</td>
    <td><input class="input" type="text" name="TenSP"> </td>
  </tr>
  <tr class="form-input">
    <td >Ảnh SP </td>
    <td><input class="input" type="file" name="AnhSP"></td>
  </tr>
  <tr class="form-input">
    <td >Số lượng</td>
    <td><input class="input" type="text" name="Soluong"></td>
  </tr>
  <tr class="form-input">
    <td >Mô tả</td>
	<td><textarea class="input" name="Mota"></textarea></td>
  </tr>
  <tr>
  <td class="form-input">Đơn giá</td>
    <td><input class="input" type="text" name="Dongia"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input class="btn" type="submit" name="Them" id="Them" value="Thêm">
    </td>
  </tr>
</table>
</form>

<style>
  .add{
    width:80%;
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
  .input-text{
    width: 35%;
  }
</style>
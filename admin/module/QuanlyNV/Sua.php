<?php
 $sql="select * from nhanvien where MaNV='$_GET[id]'";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="module/QuanlyNV/Xuly.php?id=<?php echo $dong['MaNV'] ?>" method="post" enctype="multipart/form-data">
<table  class="add" border="1">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">SỬA SẢN PHẨM</p></td>
  </tr>
   <tr class="form-input">
    <td >Mã NV</td>
    <td  ><input class="input" type="text" name="MaNV" value="<?php echo $dong['MaNV']?>"></td>
  </tr>
  <tr class="form-input">
    <td >Tên NV</td>
    <td><input class="input" type="text" name="TenNV" value="<?php echo $dong['TenNV']?>"> </td>
  </tr>
  <tr class="form-input">
    <td >Cmnd </td>
    <td><input class="input" type="text" name="CMND"  value="<?php echo $dong['CMND']?>"></td>
  </tr>
   <tr class="form-input">
    <td >Sdt</td>
    <td><input class="input" type="text" name="SDT"  value="<?php echo $dong['SDT']?>"></td>
  </tr>
  <tr class="form-input">
    <td >Bophan</td>
    <td><input class="input" type="text" name="Bophan"  value="<?php echo $dong['Bophan']?>"></td>
  </tr>
   <tr class="form-input">
    <td >Mucluong</td>
    <td><input class="input" type="text" name="Mucluong"  value="<?php echo $dong['Mucluong']?>"></td>
  </tr>
  <tr class="form-input">
    <td >Matkhau</td>
    <td><input class="input" type="text" name="Matkhau"  value="<?php echo $dong['Matkhau']?>"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input class="btn" type="submit" name="Sua" id="Sua" value="Sửa">
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
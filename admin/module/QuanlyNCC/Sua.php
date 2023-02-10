<?php
 $sql="select * from nhacungcap where MaNCC='$_GET[id]'";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="module/QuanlyNCC/Xuly.php?id=<?php echo $dong['MaNCC'] ?>"
 method="post" enctype="multipart/form-data">
<table class="add" border="1">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">Sửa NCC</p></td>
  </tr>   
 <tr class="form-input">
    <td >Mã NCC</td>
    <td><input class="input" type="text" name="MaNCC" value="<?php echo $dong['MaNCC']?>"> </td>
  </tr>
  <tr class="form-input">
    <td >Tên NCC </td>
    <td><input class="input" type="text" name="TenNCC"  value="<?php echo $dong['TenNCC']?>"></td>
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
    width: 70%;
    margin-top: 20px;
  }
  .input{
    width: 98%;
    padding: 5px 0;
  }
  .text-heading{
    line-height: 30px;
  }
  .form-input{
    margin-top: 10px;
  }
  .btn{
    margin-top: 10px;
    padding: 6px 14px;
  }
</style>
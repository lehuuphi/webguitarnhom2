<?php
 $sql="select * from danhmuc where MaDM='$_GET[id]'";
 $run=mysqli_query($conn,$sql);
 $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<form action="module/QuanlyDM/Xuly.php?id=<?php echo $dong['MaDM'] ?>" method="post" enctype="multipart/form-data">
<table class="add" border="1">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">SỬA DANH MỤC</p></td>
  </tr>   
 <tr  class="form-input">
    <td >MÃ DANH MỤC</td>
    <td><input class="input" type="char" name="MaDM" value="<?php echo $dong['MaDM']?>"> </td>
  </tr>
  <tr  class="form-input">
    <td >TÊN DANH MỤC </td>
    <td><input class="input" type="varchar" name="TenDM"  value="<?php echo $dong['TenDM']?>"></td>
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
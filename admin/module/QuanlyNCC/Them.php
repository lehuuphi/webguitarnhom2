<form action="module/QuanlyNCC/Xuly.php" method="post" enctype="multipart/form-data">
<table border="1" class="add">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p  class="text-heading">THÊM NHÀ CUNG CẤP</p></td>
  </tr>
  <tr class="form-input">
    <td >MÃ NHÀ CUNG CẤP</td>
    <td><input class="input" type="char" name="MaNCC"> </td>
  </tr>
  <tr class="form-input">
    <td>TÊN NHÀ CUNG CẤP </td>
    <td><input class="input" type="varchar" name="TenNCC"></td>
  </tr>
  <tr>
    <td colspan="2"  align="center">
      <input class="btn" type="submit" name="Them" id="Them" value="Thêm">
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
  }
  .form-input{
    margin-top: 10px;
  }
  .btn{
    margin-top: 10px;
    padding: 6px 14px;
  }
</style>
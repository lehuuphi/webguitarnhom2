<form action="module/QuanlyDM/Xuly.php" method="post" enctype="multipart/form-data">
<table class="add" border="1">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">THÊM DANH MỤC</p></td>
  </tr>
  <tr class="form-input">
    <td >MÃ DANH MỤC</td>
    <td><input class="input" type="char" name="MaDM"> </td>
  </tr>
  <tr class="form-input">
    <td >TÊN DANH MỤC </td>
    <td><input class="input" type="varchar" name="TenDM"></td>
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
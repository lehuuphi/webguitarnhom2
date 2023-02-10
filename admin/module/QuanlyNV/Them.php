<form action="module/QuanlyNV/Xuly.php" method="post" enctype="multipart/form-data">
<table border="1" class="add">
  <tr style="background-color: #33ccff;">
    <td colspan="2"><p class="text-heading">THÊM NHÂN VIÊN</p></td>
  </tr>
  <tr class="form-input">
    <td class="input-text">MÃ NHÂN VIÊN</td>
    <td  ><input class="input" type="text" name="MaNV"></td>
  </tr>
  <tr class="form-input">
    <td class="input-text">TÊN NHÂN VIÊN</td>
    <td><input class="input" type="text" name="TenNV"></td>
  </tr>
    <tr class="form-input">
    <td class="input-text">SỐ CMND</td>
    <td><input class="input" type="text" name="CMND"></td>
  </tr>
    <tr class="form-input">
    <td class="input-text">SỐ ĐIỆN THOẠI</td>
    <td><input class="input" type="text" name="SDT"></td>
  </tr>
   <tr class="form-input">
    <td class="input-text">BỘ PHẬN</td>
    <td><input class="input" type="text" name="Bophan"></td>
  </tr>
  <tr class="form-input">
    <td class="input-text">MỨC LƯƠNG</td>
    <td><input class="input" type="text" name="Mucluong"></td>
  </tr>
  <tr class="form-input">
    <td class="input-text">MẬT KHẨU</td>
    <td><input class="input" type="text" name="Matkhau"></td>
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
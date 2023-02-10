<form action="index.php?xem=camon" method="post" enctype="multipart/form-data">
    <div class="contact">
        <h2 class="contact-heading">MUSIC TALENT – ĐẠI LÝ CHÍNH HÃNG YAMAHA</h2>
        <div class="contact-content">
         <div class="contact-address">
         <i class="fa-solid fa-location-dot"></i>
         số 54 Triều Khúc,Thanh Xuân,Hà Nội
         </div>
         <div class="contact-number">
         <i class="fa-solid fa-phone"></i>
         0342388901
         </div>
         <div class="contact-email">
         <i class="fa-solid fa-envelope"></i>
         lap8714@gmail.com
         </div>
        </div>
        <table width="400px" border="1" >
  <tr class="input-row">
    <td><p class="input-text">Họ và tên :</p></td>
    <td><input class="input-contact" type="text" name="ht" id="ht" ></td>
  </tr>
  <tr class="input-row">
    <td><p class="input-text">Địa chỉ :</p></td>
    <td><input class="input-contact" type="text" name="add" id="add" ></td>
  </tr>
  <tr class="input-row"> 
    <td><p class="input-text">Email: </p></td>
    <td><input class="input-contact" type="email" name="email" id="email" ></td>
  </tr>
  <tr class="input-row">
   
    <td><p class="input-text">Điện thoại :</p></td>
    <td><input class="input-contact" type="number" name="sdt" id="sdt" ></td>
  </tr>
  <tr class="input-row">
   <a href="index.php?xem=camon">
    <td colspan="2"><div align="center">
      <input class="btn" type="submit" name="button" id="button" value="Gửi" >
    </div></td>
    </a>
  </tr>
</table>
    </div>
</form>

<style>
  :root{
    --white-color: white;
    --black-color: black;
    --primary-color:#ff8000;
  }
  .contact-heading{
    background-color: var(--primary-color);
    text-align: center;
    line-height: 40px;
  }

  .contact-content{
    margin-top: 30px;
  }

  .contact-content div{
    margin: 12px 0;
  }

  .input-contact{
    width: 98%;
    padding: 6px 0;
  }

  .input-row{
    height: 40px;
  }

  .input-text{
    margin-left: 4px;
  }
  
  .btn{
    padding: 6px 32px ;
  }

  .btn:hover{
    background-color: var(--primary-color);
    cursor: pointer;
    border: none;
  }

</style>
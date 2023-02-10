<?php 
$sql_danhmuc="select * from danhmuc";
$query_dm=mysqli_query($conn,$sql_danhmuc);
?>

<h3 class="category-heading"> <p> <i class="fa-solid fa-bars"></i>DANH MỤC SẢN PHẨM</p></h3>
<div class="category-product">
<?php
    while($dong_dm=mysqli_fetch_array($query_dm)){
?>
    <li class="list-products">
    <?php while($dong_sp=mysqli_fetch_array($query_dm))
		{					
		?>
    <a href="index.php?xem=chitietdanhmuc&id=<?php echo $dong_sp['MaDM']?>"><?php echo $dong_sp['TenDM']?></a>
    <?php } ?>
    </li>
    <?php
	}
	?> 
</div>
<h3 class="category-heading"><p>HỖ TRỢ TRỰC TUYẾN</p></h3>
<ul class="list-support">
<li class="support-heading">• Tư vấn bán hàng 1 :</li>	
<li><a href="#">Mr.Lap : 0342 388 901</a></li>
<li class="support-heading">• Tư vấn bán hàng 2 :</li>
<li><a href="#">Mr. Phi : 0353 468 441</a></li>	
<li class="support-heading">• Email liên hệ : </li>	
<li><a href="#">lap8714@gmail.com </a></li>	  
</ul>

<style>
  .list-products{
    display: flex;
    flex-direction: column;
    background-color: #a1959540;
  }

  .list-products a{
    text-decoration: none;
    color: var(--black-color);
    line-height: 25px;
    padding-left: 10px;
    line-height: 30px;
  }

  .list-products a:hover{
    background-color: #9c92925e;
    padding-left: 12px;
  }

  .category-heading{
    background-color:#ff8000;
    line-height: 35px;
    height: 35px;
  }
  .category-heading p {
    margin-left: 14px;
    color: var(--white-color);
  }
  .fa-bars{
    margin-right: 10px;
  }

  .list-support{
    list-style: none;
    padding-left: 10px;
    background-color: #a1959540;
    padding: 6px 4px 16px 10px;
  }

  .support-heading{
    color: #ea3f59;
    padding-top: 10px;
  }

  .list-support a{
    text-decoration: none;
    padding-left: 10px;
    color: var(--black-color);
  }
</style>
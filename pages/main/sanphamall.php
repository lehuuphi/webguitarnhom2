<?php 
	 if(isset($_GET['trang'])){;
	$trang=$_GET['trang'];
	 }else{
		 $trang ='';
		 }
	if($trang=='' || $trang=='1'){
		$trang1=0;
	}else{
		$trang1=($trang*9)-9;
		}	 
 $sql_all="select * from sanpham limit $trang1,9" ;
 $query_all= mysqli_query($conn,$sql_all);
?>

<div class="products-featured">
    <h1 class="products__heading">SẢN PHẨM NỔI BẬT</h1>
    <?php
	$sql_banchay=mysqli_query($conn,"select * from sanpham order by MaSP desc limit 3");
	?>
    <div class="products-body">
    <?php
	while($dong_banchay=mysqli_fetch_array($sql_banchay)){
	?>
        <a href="index.php?xem=chitietsanpham&&id=<?php echo $dong_banchay['MaSP'] ?>"class="products-link">
            <img src="admin/module/QuanlySP/img/<?php echo $dong_banchay['AnhSP'] ?>" alt="" class="products-img">
            <div class="products-info">
                <h3 class="products-name"><?php echo $dong_banchay['TenSP'] ?></h3>
                <p class="products-price">Giá: <?php echo number_format($dong_banchay['Dongia']).'' . 'VNĐ'?></p>
            </div>
        </a>
    <?php
	}
	?>
    </div>
</div>

<!--  -->

<div class="products-all">
<h1 class="products__heading">TẤT CẢ SẢN PHẨM</h1>
<div class="products-body">
    <?php
	while($dong_all=mysqli_fetch_array($query_all))
    {
	?>
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['MaSP']?>" class="products-link">
            <img src="Admin/module/QuanlySP/img/<?php echo $dong_all['AnhSP'] ?>" alt="" class="products-img">
            <div class="products-info">
                <h3 class="products-name"><?php echo $dong_all['TenSP'] ?></h3>
                <p class="products-price"><?php echo number_format($dong_all['Dongia']).''.'VNĐ'?></p>
            </div>
        </a>
    <?php
    }
	?>
    </div>

    <div class="paging">
        <h3>TRANG:
        <?php 
	       $sql_trang=mysqli_query($conn,"select * from sanpham ");
	       $count=mysqli_num_rows($sql_trang); //đếm có bao nhiêu sp trong table sanpham
	       $a=ceil($count/9); // phân chia 9 sp/trang
	       for($b=1;$b<=$a;$b++){
		  echo '<a href="?trang='.$b.'" class="page-number">'.''.' '.$b.' '.''.'</a>';
		  }
	  ?>
        </h3>
    </div>
</div>

<style>
    :root{
        --primary-color:#ff8000;
        --white-color:white;
        --black-color:black;
    }
    .products__heading{
        text-align: center;
        background-color:var(--primary-color) ;
        color: var(--white-color);
        font-size: 26px;
        line-height: 36px;
    }
    .paging{
        text-align: center;
        margin-top: 20px;
    }

    .products-body{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    }

    .products-link{
        width: 30%;
        margin:40px 0;
        text-decoration: none;
        border-radius: 5px;
        border: 1px solid #ebebeb;
        transition: 0.5s;
    }
    .products-link:hover{
        box-shadow: 1px 1px 10px 2px rgb(0 1 1 / 20%);
        transform: translate3d(0, -2px, 0);
    }

    .products-img{
        width: 100%;
        height: 284.58px;
    }

    .products-info{
        margin-top: 10px;
        text-align: center;
    }
    .products-name{
        color: var(--black-color);
        height: 40px;
    }

    .products-price{
        color: var(--primary-color);
        margin-top: 10px;
    
    }
    .page-number{
        padding: 10px 12px;
        margin: 10px;
        text-decoration: none;
        color: var(--black-color);
    }

    .page-number:hover{
        background-color: var(--primary-color);
        color: var(--white-color);
    }

</style>
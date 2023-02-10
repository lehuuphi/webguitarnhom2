<?php
	$sql_ctdm="select * from sanpham where MaDM=$_GET[id]";
	$query_ctdm=mysqli_query($conn,$sql_ctdm);
 ?>
 <?php
	$sql_tenncc="select TenDM from danhmuc where MaDM='$_GET[id]' ";
	$row=mysqli_query($conn,$sql_tenncc);
	$dong=mysqli_fetch_array($row);
?>
<div class="category-detail">
    <h1 class=category-detail__heading><?php echo $dong['TenDM'] ?></h1>
    <div class="products-body">
    <?php
        while($dong_ctdm=mysqli_fetch_array($query_ctdm)){
	?>
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_ctdm['MaSP']?>"class="products-link">
            <img src="Admin/module/QuanlySP/img/<?php echo $dong_ctdm['AnhSP'] ?>" alt="" class="products-img">
            <div class="products-info">
                <h3 class="products-name"><?php echo $dong_ctdm['TenSP'] ?></h3>
                <p class="products-price">Giá: <?php echo number_format($dong_ctdm['Dongia']).''.'VNĐ'?></p>
            </div>
        </a>
    <?php
	}
	?>
    </div>
</div>



<style>
    :root{
        --primary-color:#ff8000;
        --white-color:white;
        --black-color:black;
    }
    .category-detail__heading{
        text-align: center;
        background-color:var(--primary-color) ;
        color: var(--white-color);
        font-size: 26px;
        line-height: 36px;
    }
    .products-body{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-bottom: 40px;
    }

    .products-link{
        width: 30%;
        margin-top: 40px;
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
</style>
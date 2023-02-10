<?php
 	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="select * from sanpham where TenSP LIKE '%$search%' or  Dongia LIKE '%$search%' ";
		$query_search=mysqli_query($conn,$sql_search);
	}
?>
<div class="search">
    <h2 class="search-heading">TÌM KIẾM SẢN PHẨM VỚI TỪ KHOÁ</h2>
    <div class="search-body">
        <?php
			if($count=mysqli_num_rows($query_search)==0)
            {
        ?>
        <h1 class="search-result">Không tìm thấy sản phẩm nào với từ khoá trên !</h1>
        <?php
            }
            else
            {
            ?>
            <?php
			while($dong_search=mysqli_fetch_array($query_search)){
			?>
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['MaSP']?>" class="products-link">
                <img src="admin/module/QuanlySP/img/<?php echo $dong_search['AnhSP'] ?>" alt="" class="products-img">
                <div class="products-info">
                <h3 class="products-name"><?php echo $dong_search['TenSP'] ?></h3>
                <p class="products-price">Giá: <?php echo number_format($dong_search['Dongia']).''.'VNĐ'?></p>
                </div>
                </a>
            <?php
            }
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
    .search-heading{
        text-align: center;
        background-color:var(--primary-color) ;
        color: var(--black-color);
        font-size: 26px;
        line-height: 40px;
    }

    .search-result{
        margin-top: 30px;
    }
    .search-body{
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
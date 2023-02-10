<?php
	@session_start();
	$sql_ctsp="select * from sanpham where MaSP='$_GET[id]'";
	$query_ctsp=mysqli_query($conn,$sql_ctsp);
	$dong_ctsp=mysqli_fetch_array($query_ctsp);	
?>
<div class="products-detail">
    <h1 class="products-heading">THÔNG TIN CHI TIẾT SẢN PHẨM</h1>
    <form action="update_cart.php?id=<?php echo $dong_ctsp['MaSP'] ?>" method="post" enctype="multipart/form-data">
        <div class="detail-body">
            <img src="admin/module/QuanlySP/img/<?php echo $dong_ctsp['AnhSP']?>" alt="" class="products-detail__img">
            <div class="products-detail__info">
                <div class="info__name">Tên: <span><?php echo $dong_ctsp['TenSP']?></span></div>
                <div class="info__price">Giá: <span class="detail-price"><?php echo number_format($dong_ctsp['Dongia']).''.'VNĐ'?></span></div>
                <div class="info__quantity">Số lượng còn: <span><?php echo $dong_ctsp['Soluong']?></span></div>
                <div class="info__input">
                    Nhập số lượng:
                    <input class="input-quantity" type="number" name="soluong" size="3" min="1" value="1" />
                </div>
                <div class="info__description">Mô tả sản phẩm: <?php echo $dong_ctsp['Mota']?> </div>
                <input class="btn" align="center" type="submit" name="Mua" value="Mua ngay" >
            </div>
            </div>
        </div>
    </form>
</div>

<style>
    :root{
        --primary-color:#ff8000;
        --white-color:white;
        --black-color:black;
    }
    .products-heading{
        text-align: center;
        background-color:var(--primary-color) ;
        color: var(--white-color);
        font-size: 26px;
        line-height: 36px;
    }
    .detail-body{
        display: flex;
        margin: 20px 0;
    }
    .products-detail__img{
        width: 500px;
        height: 500px;
    }

    .products-detail__info{
        margin-left: 10px;
    }

    .products-detail__info div{
        margin-top: 30px;
    }

    .info__name span{
        font-size: 20px;
        font-weight: 600;
    }

    .detail-price{
        color: var(--primary-color);
    }

    .btn{
        margin-top: 50px;
        width: 100%;
        background: red;
        border: none;
        color: white;
        padding: 10px;
        border-radius: 5px
    }

    .btn:hover{
        cursor: pointer;
        background-color: #c3441d;
    }

    .info__quantity span{
        color: red;
    }

    .input-quantity{
        width: 50px;
    }
</style>
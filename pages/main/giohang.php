<div class="cart">
    <h2 class="cart-heading">GIỎ HÀNG</h2>
    <?php
	@session_start();
	if(isset($_SESSION['product'])){
		if(isset($_SESSION['dangnhap'])){
			echo '<h2 class="title"> Xin chào bạn: '.$_SESSION['dangnhap'].' </h2>';
		}else{
			echo '<div class="title">Giỏ hàng của bạn</div>';
		}
			echo '<div class="box_cart">';
			echo '<table width=100% border="1" >';	
			echo '<tr>';
			echo '<td>Mã sản phẩm</td>';
			echo '<td>Tên sản Phẩm</td>';
			echo '<td>Hình ảnh</td>';
			echo '<td>Giá sản phẩm</td>';
			echo '<td>Số lượng</td>';
			echo '<td>Tổng tiền</td>';
			echo '<td>Quản lý</td>';
			echo '</tr>';
	        $thanhtien=0;
	        foreach($_SESSION['product'] as $cart_item)
            {
			$id=$cart_item['id'];
			$sql="select * from sanpham where MaSP='$id'";
			$query=mysqli_query($conn,$sql);
			$dong=mysqli_fetch_array($query);
		 	echo'<tr>';
			echo'<td>'.$dong['MaSP'].'</td>';
			echo'<td>'.$dong['TenSP'].'</td>';
			echo'<td><img src="admin/module/QuanlySP/img/'.$dong['AnhSP'].'" width="100" height="100" /></td>';
			echo'<td>'.number_format($dong['Dongia']).'</td>';
			echo'<td><a href="update_cart.php?tru='.$cart_item['id'].'" style="margin-right:2px;"><i class="fa-solid fa-icon fa-minus"></i></a>'.$cart_item['soluong'].'<a href="update_cart.php?cong='.$cart_item['id'].'" style="margin-right:2px;"><i class="fa-solid fa-icon fa-plus"></i></a></td>';
			$tongtien=0;
			$tongtien=$cart_item['soluong']*$cart_item['Dongia'];
			$thanhtien=($thanhtien + $tongtien);
			echo'<td>'.number_format($tongtien).'</td>';
			echo'<td width=10%><a href="update_cart.php?xoa='.$cart_item['id'].'"><i class="fa-solid fa-icon fa-trash-can"></i></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
  	        }
			echo '<tr>
				<td colspan="6"><a href="update_cart.php?xoatoanbo=1" class="delete-all" >Xóa toàn bộ</a>			
				</td>	 
				<td>Thành tiền : <p class="price">'.number_format($thanhtien).'VNĐ'.'</p></td>	
			</tr>';		
            echo'</table>';
            echo'</div>';
        }
        else{	
		echo '<p class="cart-empty">Giỏ hàng của bạn trống !<?p>';
	    }
 	
  ?>

<div align="center" style="padding-top:20px;"> 
              <a href="index.php"><input style="height:30px;" type="submit" name="" value="Tiếp tục mua hàng"></a>
                <?php
					if(isset($_SESSION['product'])){
				?>
				
                 	<a href="index.php?xem=xulyphieudat"><input style="height:30px;" type="submit" name="" value="Thanh toán "></a>
				<?php
					}
				?>
</div>

</div>

<style>
     :root{
    --white-color: white;
    --black-color: black;
    --primary-color:#ff8000;
    }
    .cart-heading{
        text-align: center;
        background-color: var(--primary-color);
        line-height: 40px;
    }

    .title{
        margin: 10px 0;
        font-weight: 600;
        font-size: 20px;
    }

    td{
        text-align: center;
    }

    .fa-icon{
        margin: 0 5px;
		color: var(--primary-color);
    }
    .delete-all{
        text-decoration: none;
        color: red;
        font-size: 20px;
    }
    .price{
        color: var(--primary-color);
    }

	.cart-empty{
		margin-top: 20px;
	}

</style>
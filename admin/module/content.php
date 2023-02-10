<div class="content">
    <?php 
        if(isset($_GET['Quanly'])){
            $tam=$_GET['Quanly'];
        }
        else{ $tam='';}
        if($tam=='QuanlyDM'){
			include('module/QuanlyDM/Main.php');
		} 
        if($tam=='QuanlyNCC'){
			include('module/QuanlyNCC/Main.php');
        }
        if($tam=='QuanlyNV'){
			include('module/QuanlyNV/Main.php');
		} 
        if($tam=='QuanlySP'){
			include('module/QuanlySP/Main.php');
		} 
        if($tam=='Xulyhoadon'){
			include('module/XulyHD/XulyHD.php');
		}
        if($tam=='donhang'){
			include('module/QuanlyDH/donhang.php');
		}
        if($tam=='inhoadon'){
			include('module/Inhoadon/inhoadon.php');
		}
        if($tam=='doanhthu'){
			include('module/Quanlydoanhthu/doanhthu.php');
		}
    ?>
</div>

<style>
    .content{
        display: flex;
        justify-content: space-around;
    }
</style>
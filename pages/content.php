<div class="content">
    <div class="col-2">
    <?php
			include $_SERVER['DOCUMENT_ROOT'] .'/webguitar/pages/danhsach.php';
		?>
    </div>
    <div class="col-7">
        <?php 
            if(isset($_GET['xem'])){
                $tam=$_GET['xem'];
            } else { $tam='';}
            if($tam=='chitietdanhmuc'){
                include('pages/main/chitietdanhmuc.php');}
            elseif($tam=='chitietsanpham'){
                include('pages/main/chitietsanpham.php');}
            elseif($tam=='gioithieu'){
                include('pages/main/gioithieu.php');}	
            elseif($tam=='huongdan'){
                include('pages/main/huongdan.php');}
            elseif($tam=='lienhe'){
                include('pages/main/lienhe.php');}
            elseif($tam=='camon'){
                include('pages/main/camon.php');}
            elseif($tam=='giohang'){
                include('pages/main/giohang.php');}
            elseif($tam=='xulyphieudat'){
                include('pages/main/xulyphieudat.php');}
            elseif(isset($_POST['search'])){
                include('pages/main/timkiem.php');}
            else{	
                include('pages/main/sanphamall.php');}
        ?>
    </div>
</div>

<style>
    .content{
        max-width: 1300px;
        margin: auto;
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
    }
    .col-2{
        width: 22%;
    }
    .col-7{
        width: 75%;
    }
</style>
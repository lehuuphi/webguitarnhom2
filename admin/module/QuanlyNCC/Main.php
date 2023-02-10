<div class="col-3">
<?php
		if(isset($_GET['action']))
		{
			$tam=$_GET['action'];
		}
		else
		{
			$tam='';
		}
		if($tam=='Them'){
			include('module/QuanlyNCC/Them.php');
		}
		if($tam=='Sua')
		{
			include('module/QuanlyNCC/Sua.php');
		}
	?>
</div>

<div class="col-5">
<?php
		include('module/QuanlyNCC/Lietke.php');
	?>
</div>

<style>
	.col-3{
		width: 30%;
	}
	.col-5{
		width: 50%;
	}
</style>
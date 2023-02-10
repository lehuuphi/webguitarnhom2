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
			include('module/QuanlyNV/Them.php');
		}
		if($tam=='Sua')
		{
			include('module/QuanlyNV/Sua.php');
		}
	?>
</div>

<div class="col-6">
<?php
		include('module/QuanlyNV/Lietke.php');
	?>
</div>

<style>
	.col-3{
		width: 30%;
	}
	.col-6{
		width: 60%;
	}
</style>
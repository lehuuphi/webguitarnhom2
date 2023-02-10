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
			include('module/QuanlySP/Them.php');
		}
		if($tam=='Sua')
		{
			include('module/QuanlySP/Sua.php');
		}
	?>
</div>

<div class="col-7">
<?php
		include('module/QuanlySP/Lietke.php');
	?>
</div>

<style>
	.col-3{
		width: 30%;
	}
	.col-7{
		width: 65%;
	}
</style>
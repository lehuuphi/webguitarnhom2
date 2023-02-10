<div class="turnover">
<h2>DOANH THU CỬA HÀNG</h2> 
<div class="doanhthu">
<?php 
for($month=1;$month<=12; $month++){
	switch($month)
	{		
	case 1: case 3: case 5: case 7: case 8: case 10: case 12:
				{
					$day = 31;
					break;
				}	
	case 4: case 6: case 9: case 11:
				{
					$day = 30;
					break;
				}
	case 2:{
		$day=28;
		break;
		}	
	}
//for($j=1;$j<=$day;$j++){
$sql_="SELECT * FROM chitiethoadon INNER JOIN hoadon WHERE chitiethoadon.MaHD=hoadon.MaHD";
$query_=mysqli_query($conn, $sql_);
$dong_=mysqli_fetch_assoc($query_);
$Ngaylap=$dong_['Ngaylap'];
$MaHD=$dong_['MaHD'];
$a='2022-'.$month.'-'.'1'.' 00:00:00';
$b='2022-'.$month.'-'.$day.' 23:59:59';
$sql="SELECT SUM(Tongtien) as sum FROM hoadon INNER JOIN chitiethoadon ON hoadon.MaHD=chitiethoadon.MaHD 
WHERE Ngaylap BETWEEN '{$a}' AND '{$b}'";
$query=mysqli_query($conn,$sql);
$dong=mysqli_fetch_assoc($query);
$sum=$dong['sum'];
if($sum<>0){
	//echo 'Tháng'.$month.'==>';
	//echo $dong['sum'].'<br>';
	echo '<table width="500" border="1">';
 echo '<tr>
 <td width="121">Tháng</td>
 <td width="116">Thời gian</td>
 <td width="110">Hoá đơn</td>
 <td width="125"></td>
 </tr>';
 echo '<tr>
 <td>'.$month.'</td>
 <td>'.$Ngaylap.'</td>
 <td>'.$MaHD.'</td>
 <td>&nbsp;</td>
 </tr>';
 echo '<tr>';
 echo '<td colspan="3"><h3>Tổng doanh thu của tháng:</h3></td>';
 echo '<td>'.$sum.'</td>';
 echo '</tr>';
 echo '</table>'.'<br/>';
}
}
?>
</div>  
</div>

<style>
    .turnover{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
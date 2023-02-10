<?php 
$sql_danhmuc="select * from danhmuc";
$query_dm=mysqli_query($conn,$sql_danhmuc);
?>
<?php 
	$sql_sp="select * from sanpham ";
	$query_sp=mysqli_query($conn,$sql_sp);
?> 
<div class="menu">
    <ul class="list-menu">
        <li class="menu-item">
            <a href="index.php" class="menu-link">
                <i class="fa-solid fa-house"></i>
            </a>
        </li>
        <?php
            while($dong_dm=mysqli_fetch_array($query_dm)){
		?>
        <li class="menu-item">
            <a href="" class="menu-link">
                <p>Sản Phẩm</p>
                <ul class="sub-menu">
                    <?php while($dong_sp=mysqli_fetch_array($query_dm))
					{					
			        ?>
                    <li class="sub-list">
                        <a class="sub-link" href="index.php?xem=chitietdanhmuc&id=<?php echo $dong_sp['MaDM']?>">
                        <p><?php echo $dong_sp['TenDM']?></p>
                        </a>
                    </li>
                    <?php 
                    } 
                    ?>
                </ul>
            </a>
        </li>
        <?php
			}
	   ?>
        <li class="menu-item">
            <a href="index.php?xem=gioithieu" class="menu-link">
                <p>Giới Thiệu</p>
            </a>
        </li>
        <li class="menu-item">
            <a href="index.php?xem=huongdan" class="menu-link">
                <p>Hướng dẫn</p>
            </a>
        </li>
        <li class="menu-item">
            <a href="index.php?xem=lienhe" class="menu-link">
                <p>Liên hệ</p>
            </a>
        </li>
    </ul>
</div>

<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: 0;
    }

    :root{
    --white-color: white;
    --black-color: black;
    --primary-color:#ff8000;
    }

    html{
    font-family: Arial, Helvetica, sans-serif;
    }

    .list-menu{
    max-width: 1300px;
    margin: auto;
    display: flex;
    line-height: 40px;
    justify-content: space-around;
    background-color: #ffe500;
    }

    .list-menu li {
    list-style: none;
    width: 10%;
    text-align: center;
    }

    .list-menu .menu-item:hover{
    background-color: #dbce5a;
    }
    .list-menu .menu-item:hover .sub-menu{
        display: block;
    }
    .list-menu li .menu-link{
    text-decoration: none;
    color: var(--black-color);
    font-weight: 600;
    font-size: 20px;
    } 
    .menu{
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }
    .menu-link{
        position: relative;
    }
    .sub-menu{
        position: absolute;
        width: 200px;
        margin-top: 2px;
        background-color: white;
        border-radius: 5px;
        animation: fadeIn ease-in 0.3s;
        display: none;
    }

    li .sub-list{
        width: 100%;
        text-align: left;
    }
    .sub-link{
        text-decoration: none;
        color: var(--black-color);
    }

    .sub-link p{
        padding-left: 14px;
    }

    .menu-item:hover .sub-menu{
        display: block;
    }
    .sub-list:hover {
        background-color: var(--primary-color);
    }
    .sub-list:hover .sub-link{
        color: var(--white-color);

    }
    @keyframes fadeIn {
    from{
        opacity: 0;
    }

    to{
        opacity: 1;
    }
}
</style>
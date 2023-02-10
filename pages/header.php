<?php 
ob_start();
include('admin/module/config.php');
?>
<div class="header">
    <div class="header-accuracy">
        <?php
        if (isset($_SESSION["dangnhap"])){
            echo '<p class="account">'.$_SESSION['dangnhap'].'</p>';
        }
        else{
            echo '<a href="dangnhap.php" class="login">
            <p>Đăng Nhập</p>
            </a>';
        }
        ?>

        <?php
            if (!isset($_SESSION["dangnhap"])) {
              echo '<li><a href="dangky.php">Đăng ký</a></li>';
            } else {
               echo '<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>';
            }
        ?> 
        <?php 
        if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1){
        unset($_SESSION['dangnhap']);
        header("Location: index.php");
	    }  
        ?>   
    </div>
    <div class="header-container">
        <a href="index.php" class="logo-link">
            <img src="/webguitar/img/logo.png" alt="" class="logo-img">
        </a>

        <form method="post" enctype="multipart/form-data" class="form-search">
            <input type="text" id="searchf" name="searchtext" class="search-input" placeholder="Tìm kiếm sản phẩm">
            <button class="search-btn" id="searchbtn" name="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>

        <div class="cart">
            <a href="index.php?xem=giohang">
               <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>


    </div>
</div>

<style>
    /* .header{
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        z-index: 10;
    } */

    .account{
        color: #ffe500;
        margin-right: 10px;
        font-weight: 600;
        font-size: 18px;
    }

    .header{
    background-color:#ff8000;
    height: 150px;
    }
    .header-accuracy{
    display: flex;
    max-width: 1200px;
    margin: auto;
    justify-content: flex-end;
    height: 30px;
    align-items: center;
    }

    .header-accuracy li{
        list-style: none;
    }

    .header-accuracy a{
    text-decoration: none;
    color: var(--white-color);
    font-weight: 600;
    }

    .header-accuracy .login{
    margin-right: 10px;
    }

    .header-container{
    display: flex;
    justify-content: space-around;
    align-items: center;
    max-width: 1400px;
    margin: auto;
    }

    .form-search{
    width: 30%;
    display: flex;
    }

    .search-input{
    width: 90%;
    padding: 10px 0 10px 10px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px
    }
    .search-btn{
    padding: 5px 10px;
    background-color: var(--black-color);
    cursor: pointer;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    }

    .search-btn:hover{
        opacity: 0.8;
    }

    .fa-magnifying-glass{
    color: var(--white-color);
    }

    .fa-cart-shopping{
    color: var(--white-color);
    font-size: 30px;
    }
</style>
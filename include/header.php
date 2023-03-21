<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/shopping/style.css">
    <script src="https://kit.fontawesome.com/94f46b7060.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="./javascript/shop.js"></script>
    <script defer src="./javascript/mainImgList.js"></script>
    <script defer src="../javascript/joinPage.js"></script>
</head>
<body>
    <div id="wrap">
        <!--상단-->
        <div id="menu">
            <header>
                <img src="/shopping/img/Iiim1.png" alt="logo">
                <h1><a href="/shopping/index.php"><i>I i i M</i></a></h1>
                <ul>
                    <?php
                        if(isset($_SESSION['userid'])){
                    ?>
                    <li class="notHov"><?=$_SESSION['userid']?>님 안녕하세요</li>
                    <li><a href="/shopping/process/logout_process.php">로그아웃</a></li>
                    <?php        
                        }else {
                    ?>
                    <li>
                        <a href="/shopping/member/login.php">LOGIN</a>
                    </li>
                    <li>
                        <a href="/shopping/member/join.php">JOIN</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li>
                        <a href="/shopping/mypage.php">
                            <i class="fa fa-user" style="font-size:24px"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/shopping/cart.php">
                            <i class="fa fa-shopping-bag" style="font-size:24px;"></i>
                        </a>
                    </li>
                    <?php
                        if($_SESSION['userid'] == "admin"){
                    ?>
                    <li id="newPro">
                        상품 등록
                        <!-- /shopping/productWrite.php -->
                    </li>
                    
                    <?php        
                        }
                    ?>
                </ul>
            </header>
        </div>
        
        
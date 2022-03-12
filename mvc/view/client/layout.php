<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/index.css">    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/fontawesome/css/all.css">   
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class = "nav">
                <div class="logo">
                    <a href="http://localhost:81/Duanmau">
                        <img  src="http://localhost:81/Duanmau/public/img/olay-feature.png" alt="" style = "width: 117px;
                                                                                                            margin-bottum: 10px;
                                                                                                            position: absolute;
                                                                                                            top: -11px;
                                                                                                            left: 120px;
                                                                                                            cursor: pointer;">
                    </a>
                </div>
                <div id="search-box" style="margin-right:-100px;margin-left:250px">
                    <form action="search" method="GET">
                        <input class="search-txt" type="text" placeholder="search......." required name = "keyword" value ="">
                        <button type="submit" class = "bnt_search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div><br>

                <div class="icon3">
                    <a href="{{URL::to('viewca')}}">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="con">
                <?php if (!isset($_SESSION['user_name'])):?>
                    <div class="user">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>Tài Khoản</p>
                        <div class="infomation">
                            <ul>
                                <li><a href="registration" class=''>Đăng ký</a></li>
                                <li id='login'>Đăng Nhập</li>
                                <li><a href="">Yêu Thích</a></li>
                            </ul>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="infomation_user_details">
                        <!-- <div class="avatar">
                            
                        </div> -->
                        <div class="user_name">
                            <p>Tài khoản</p>
                            <p><?= $_SESSION['user_name']['user_name'] ?></p>
                        </div>
                        <div class="infomation_user">
                            <ul>
                                <li><a href="infomation">Thông tin cá nhân</a></li>
                                <li><a href="">thông báo</a></li>
                                <li><a href="">Yêu Thích</a></li>
                                <?php if ($_SESSION['user_name']['role']==1): ?>
                                    <li><a href="Dashboard">admin</a></li>
                                <?php endif; ?>
                                <li><a href="delete">Đăng Xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="cart">
                    </div>
                </div>
            </nav>
            <div class="menu">
                <div class="danhmuc">
                    <div class="icon">
                        <span class="tendanhmuc">Danh Mục</span>
                    </div>
                    <div class="the2">
                        <?php echo $this->category; ?>
                    </div>
                </div>

                <div class="xx">
                    <ul class="the1">
                        <li><a href="Duanmau/">TRANG CHỦ</a></li>
                        <li><a href="news.html">Tin Tức</a></li>
                        <li><a href="">THƯƠNG HIỆU</a></li>
                        <li><a href="">ĐỊA CHỈ</a></li>
                        <li><a href="cotac.html">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <?=require_once("component/login.php")?>
        <script>
            $(document).ready(function () {
                show_cart();
                function show_cart () {
                    $.ajax({
                        url: "cartquantity",
                        method:"GET",
                        success:function(data) {
                            $('.cart').html(data);
                        }
                    });
                }
                $('.buy').on('click',function() {
                        var id = $(this).data('id');
                        // alert(id);
                        $.ajax({
                            url: "cart",
                            method:"GET",
                            data:{
                                id:id,
                                sss:null
                            },  
                            success:function(data){
                                // alert("insert thành công"+data);
                                $('html, body').animate({
                                    scrollTop:0
                                },1000);
                                show_cart();
                            }
                        });
                });
            });
        </script>
        <?php if (isset($_SESSION['user_name'])): ?>
        <script type="text/javascript" >
            // $(document).ready(function () {
                
            // });
            function updatetime() {
                jQuery.ajax({
				url:'update_user_status',
                    success:function(){
                    }
			    });
            }
            setInterval(function(){
			    updatetime();
		    },3000);
        </script>
<?php endif; ?>
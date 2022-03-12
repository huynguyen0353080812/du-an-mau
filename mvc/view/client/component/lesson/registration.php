<?php include_once("mvc/view/client/layout.php"); ?>
<?php include_once("mvc/view/client/component/lesson/google_source.php"); ?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/validation.css">    
<style>
    .quantity{
        margin-bottom:10px;
    }
    a{
        text-decoration: none;
    }
    .icongift{
        position: relative;
        bottom: 18px;
    }
    .registration{
        position: relative;
        width: 40%;
        height: 100%;
        margin:auto;
        display: flex;
        flex-flow: column;
        align-items: center;
        background: #ffff;
        /* flex-flow: row-reverse; */
    }
    i{
    margin-right: 10px;
}
</style>
<div class="registration">
        <P class="chu">ĐĂNG KÝ THÀNH VIÊN</P>
                        <form action="registration_acount" method="POST" class="bang">
                            <p>Tên Đăng Nhập</p><input type="text" placeholder="Nhập Tên Đăng Nhập" name = "user_name" class="the" id="masv"><br>
                            <span id="ls1"></span>
                            <p>Mơi nhập password</p><input type="password" placeholder="Nhập password" class="the" id="masv" name = "password"><br>
                            <p>Số Điện Thoại </p><input type="text" placeholder="Số Điện Thoại" class="the" id="name" name = "number_phone"> <br>
                            <span id="ls2"></span>
                            <p>Email</p><input type="email" placeholder="Bạn hãy nhập Email" class="the" id="email" name = "email" required >
                            <br>
                            <span id="ls3"></span>
                            <input type="submit" class="form__button" name="bnt" style ="margin-bottom: 100px;margin-top:20px;" value = "gửi">
                        </form>
                        <span id="gioitinh"></span>
                        <br>
                        <div class="hoac" id=""> <hr><span class="h">hoặc</span><hr></div>
                        <div class="or">
                            <div class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <span>Facebook</span></div>
                            <?php if (isset($authUrl)):?>
                            <a href=<?= $authUrl ?>>
                                <div class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
                                <span>Google</span></div>
                            </a>
                            <?php endif; ?>
                            <div class="tiwe"><i class="fa fa-twitter-square" aria-hidden="true"></i>
                            <span>twitter</span></div>
                            <div class="instagram"><i class="fab fa-github"></i></i></i>
                                <span>github</span></div>
                        </div>
</div>
<?php include_once("mvc/view/client/footer.php"); ?>
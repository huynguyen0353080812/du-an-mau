<?php include_once("mvc/view/client/layout.php"); ?>
<link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/test.css">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    main{
    display: grid;
    grid-template-columns: 1fr 30%;
    grid-gap: 0px 20px;
    width: 90%;
    margin: auto;
    margin-top: 20px;
}
.content{
    width: 500px;
    height: 600px;
    margin: auto;
}
.chu{
    font-size: 20px;
}
/* danh ky */
.xx1 {
    margin-top: 5px;
    margin-left: -15px;
}
</style>
    <main>
        <article>
            <div class="card" id="cart2">
                <div class="card-body">
                <?php foreach ($_SESSION['Cart'] as $key => $value):?>
                    <div class="card-order" id="box">
                        <span><img src="http://localhost:81/Duanmau/public/img/<?php echo $value['image']?>" alt=""style="width:120px"></span>
                        <span><?php echo $value['products_name'] ?></span>
                        <span><?php echo $value['price'] ?></span>
                        <span><?php echo $value['quantity'] ?></span><br>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
            <div class="card" id="cart3">
                <div class="card-body">
                <h5 class="card-title">Chọn hình thức giao hàng</h5>
                <p class="card-text">
                   <input type="checkbox"><label for="">khi giao hàng</label><br>
                   <input type="checkbox"><label for="">Qua thẻ</label>
                </p>
                </div>
            </div>
            <button type="button" class="btn btn-success" id = "order">Success</button>
        </article>
        <section>
          <div class="card" id="cart1">
            <div class="card-body">
              <h5 class="card-title">Địa chỉ giao Hàng</h5>
                <form action="" method="POST">
                  <span>tên ngươi nhận:</span><input type="text" name="" id="user_name" class="user_name"><br>
                  <span>Địa Chỉ:</span><br><input type="text" name="" id="" class ="adress_user" ><br>
                  <span>Số điện thoại:</span><input type="text" name="" id="" class ="number_phone" style = "margin-top: 10px;">
                </form>
            </div>
          </div>
          <div class="card" id="cart4">
            <div class="card-body">
              <h5 class="card-title">Địa chỉ giao Hàng</h5>
              <p class="card-text">
                    <span>Tạm tính</span><br>
                    <span>Phí vận chuyển</span><br>
                    <span>Thành tiền:</span><br>
              </p>
            </div>
          </div>
    </main>
<?php include_once("mvc/view/client/footer.php"); ?>
<script>
            $(document).ready(function () {
                $('#order').on('click',()=>{
                    var name_user = $('#user_name').val()
                    var adress_user = $('.adress_user').val()
                    var number_phone = $('.number_phone').val()
                    $.ajax({
                            url: "order",
                            method:"POST",
                            data:{
                              name_user:name_user,
                              adress_user:adress_user,
                              number_phone:number_phone
                            },  
                            success:function(data){
                                location.assign("http://localhost:81/Duanmau/");
                            }
                        });
                })
            });
        </script>
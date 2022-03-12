<?php include_once("mvc/view/client/layout.php"); ?>
    <main class = "main">
        <div class="filter">
            <div class="filter1">
                <div class="categories">
                    <h5>Danh Mục</h5>
                    <h6>canons</h6>
                    <a href=""><h6>máy ảnh du lich</h6></a>
                </div>
                <div class="adress">
                    <h5>nơi nhận</h5>
                </div>
                <div class="price">
                    <h5>lọc giá</h5>
                    <div class="price_filter">
                        <input type="number" min="1" value="1">
                        <input type="number" max="">
                    </div>
                </div>
            </div>

        </div>
        <div class="search">
            <h4>kết quả tìm kiếm cho từ khóa: <?= $keyword ?></h4>
            <div class="resual">
                    <?php foreach($result as $row ):?>
                            <div class="smalltin4">
                            <input type="hidden" name="id" value = "<?php echo $row['id']?>" class="id">
                                <div class="sale1">
                                    <div class="smallsale1">
                                        <span class="magiam1"><?php echo $row['discount_code'] ?> </span>
                                    </div>
                                </div>
                                <a href="product_details?id=<?php echo $row['id']?>"><img src="http://localhost:81/Duanmau/public/img/<?php echo $row['image'] ?>" alt="" class="iphone11"></a>
                                <!-- <a href=""> -->
                                    <div class="buy1" data-id="<?php echo $row['id']?>">
                                        <div class="iconshoping">
                                        </div>
                                        <span class="giohang1">Thêm vào rỏ hàng </span>
                                    </div>
                                <!-- </a> -->
                                <p class="name1">
                                <?php echo $row['products_name'] ?></p>
                                <div class="danhgia1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>    
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="tonggia1">
                                    <p class="gia1"><?php echo number_format($row['price'],0,",",".") ?> vnđ</p>
                                    <P class="giamgia1"><?php echo number_format($row['discount'],0,",",".") ?></P> 
                                </div>
                            </div>
                        <?php endforeach;?>
            </div>
        </div>
    </main>
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
                $('.buy1').on('click',function() {
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
    <?php include_once("mvc/view/client/footer.php"); ?>
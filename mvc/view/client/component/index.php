<?php include_once("mvc/view/client/layout.php"); ?>
<div class="wrap">
    <div class="banner">
        <div class="banner1">
                <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="http://localhost:81/Duanmau/public/img/banner6.jpg" alt="" class="anh3"></div>
                    <div class="swiper-slide"><img src="http://localhost:81/Duanmau/public/img/banner7.jpg" alt="" class="anh3"></div>
                    <div class="swiper-slide"><img src="http://localhost:81/Duanmau/public/img/banner02.3.png" alt="" class="anh3"></div>
                    <div class="swiper-slide"><img src="http://localhost:81/Duanmau/public/img/banner02.2.png" alt="" class="anh3"></div>
                    <div class="swiper-slide"><img src="http://localhost:81/Duanmau/public/img/banner new.jpg" alt="" class="anh3"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="ringht">
            <div class="banner2">
                <img src="http://localhost:81/Duanmau/public/img/huy.jpg" alt="" class="anh3">
            </div>
            <div class="banner2">
                <img src="http://localhost:81/Duanmau/public/img/banner8.jpg" alt="" class="anh3">
            </div>
        </div>
    </div>
</div>
<main>
    <article>
        <div class="danhsachsp1">
            <p class="tieude">
                FLASH SALE <i class="fas fa-bolt"
                    style="margin-left: 10px;transform: rotate(20deg); font-size: 40px;position: relative;top: 10px;transform: skewY(-80px);"></i>
            </p>
        </div>
        <div class="left">
            <div class="iconleft"></div>
        </div>
        <div class="right">
            <div class="iconright"></div>
        </div>
        <div class="baobi1">
            <?php foreach($result as $row ):?>
            <div class="smalltin1">
                <input type="hidden" name="id" value="<?php echo $row['id']?>" class="id">
                <div class="sale">
                    <div class="smallsale">
                        <span class="magiam">
                            <?php echo $row['discount_code'] ?>
                        </span>
                    </div>
                </div>
                <a href="product_details?id=<?php echo $row['id']?>"><img
                        src="<?php echo $url ?>/public/img/<?php echo $row['image'] ?>" alt=""
                        class="iphone1"></a>
                <!-- <a href=""> -->
                <div class="buy" data-id="<?php echo $row['id']?>"> 
                    <div class="iconshoping">
                    </div>
                    <span class="giohang">Th??m v??o r??? h??ng </span>
                </div>
                <!-- </a> -->
                <p class="name">
                    <?php echo $row['products_name'] ?>
                </p>
                <div class="danhgia">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="tonggia">
                    <p class="gia">
                        <?php echo number_format($row['price'],0,",",".") ?> vn??
                    </p>
                    <P class="giamgia">
                        <?php echo number_format($row['discount'],0,",",".") ?>
                    </P>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </article>
    <div id = "banner3">
        <img src="http://localhost:81/Duanmau/public/img/banner-dji-01.jpg" alt="" class="anh10">
    </div>
    <aside>
        <div class="danhsachsp2">
            <center><span class="tieude1">S???N PH???M N???I B???T</span></center>
        </div>
        <div class="tin">
            <?php foreach($result1 as $row ):?>
            <div class="smalltin2">
                <input type="hidden" name="id" value="<?php echo $row['id']?>" class="id">
                <div class="sale">
                    <div class="smallsale">
                        <span class="magiam">
                            <?php echo $row['discount_code'] ?>
                        </span>
                    </div>
                </div>
                <a href="product_details?id=<?php echo $row['id']?>">
                <img
                        src="http://localhost:81/Duanmau/public/img/<?php echo $row['image'] ?>" alt=""
                        class="iphone1"></a>
                <!-- <a href=""> -->
                <div class="buy" data-id="<?php echo $row['id']?>">
                    <div class="iconshoping">
                    </div>
                    <span class="giohang">Th??m v??o r??? h??ng </span>
                </div>
                <!-- </a> -->
                <p class="name">
                    <?php echo $row['products_name'] ?>
                </p>
                <div class="danhgia">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="tonggia">
                    <p class="gia">
                        <?php echo number_format($row['price'],0,",",".") ?> vn??
                    </p>
                    <P class="giamgia">
                        <?php echo number_format($row['discount'],0,",",".") ?>
                    </P>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </aside>
    <aside class="huy">
        <div class="danhsachsp3">
            <center><span class="tieude1">Ph??? Ki???n</span></center>
        </div>
        <div class="tin1">
        <?php foreach($result2 as $row ):?>
            <div class="smalltin2">
                <input type="hidden" name="id" value="<?php echo $row['id']?>" class="id">
                <div class="sale">
                    <div class="smallsale">
                        <span class="magiam">
                            <?php echo $row['discount_code'] ?>
                        </span>
                    </div>
                </div>
                <a href="product_details?id=<?php echo $row['id']?>">
                <img
                        src="http://localhost:81/Duanmau/public/img/<?php echo $row['image'] ?>" alt=""
                        class="iphone1"></a>
                <!-- <a href=""> -->
                <div class="buy" data-id="<?php echo $row['id']?>">
                    <div class="iconshoping">
                    </div>
                    <span class="giohang">Th??m v??o r??? h??ng </span>
                </div>
                <!-- </a> -->
                <p class="name">
                    <?php echo $row['products_name'] ?>
                </p>
                <div class="danhgia">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="tonggia">
                    <p class="gia">
                        <?php echo number_format($row['price'],0,",",".") ?> vn??
                    </p>
                    <P class="giamgia">
                        <?php echo number_format($row['discount'],0,",",".") ?>
                    </P>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </aside>
    <section>
        <div class="news">
            <div class="title">
                <h2>news</h2>
            </div>
            <div class="content_new">
                <div class="newspaper">
                    <img src="http://localhost:81/Duanmau/public/img/tin.jpg" alt="" class="anh4">
                    <p class="td"><a href="">GoPro tuy??n b??? th?????ng 5 tri???u USD</a></p>
                    <span class="the-frim">EGANY Technology</span><br>
                    <p class="nd">GoPro v???a c??ng b??? gi???i th?????ng th?????ng ni??n cho nh???ng s???n ph???m ?????p nh???t ???????c ghi l???i t??? thi???t b??? c???a h??? v???i t???ng gi?? tr??? l??n ?????n 5 tri???u USD.... <a href=""><span>?????c
                                        Th??m</span></a></p>
                </div>
                <div class="newspaper1">
                    <div class="smallnewspaper">
                        <div class="oneimg">
                            <img src="http://localhost:81/Duanmau/public/img/tin1.jpg" alt="" class="anh5">
                        </div>
                        <span class="chu">Nikon Ra M???t ???ng K??nh Macro ?????u Ti??n Cho D??ng M??y ???nh Nikon <br> <span
                                        class="chu1">N???u b???n l?? m???t ng?????i y??u th??ch nhi???p ???nh, ??ang s??? d???ng ??i???n tho???i
                                        ?????
                                        quay phim, ch???p ???nh, v?? b???t ?????u nh???n ra ??i???n tho???i kh??ng ph???i l??c n??o c??ng ????p
                                        ???ng
                                        h???t nhu c???u c???a b???n th??n....... <a href=""><span>?????c
                                                Th??m</span></a>
                        </p>
                        </span>
                        </span>
                    </div>
                    <div class="smallnewspaper1">
                        <div class="oneimg">
                            <img src="http://localhost:81/Duanmau/public/img/tin2.jpg" alt="" class="anh5">
                        </div>
                        <span class="chu">Canon EOS R3 S??? C?? T??nh N??ng Theo D??i AF Cho Xe ??ua V?? M??t?? <br> <span
                                        class="chu1">N???u b???n l?? m???t ng?????i y??u th??ch nhi???p ???nh, ??ang s??? d???ng ??i???n tho???i
                                        ?????
                                        quay phim, ch???p ???nh, v?? b???t ?????u nh???n ra ??i???n tho???i kh??ng ph???i l??c n??o c??ng ????p
                                        ???ng
                                        h???t nhu c???u c???a b???n th??n....... <a href=""><span>?????c
                                                Th??m</span></a>
                        </p>
                        </span>
                        </span>
                    </div>
                    <div class="smallnewspaper1">
                        <div class="oneimg">
                            <img src="http://localhost:81/Duanmau/public/img/tin5.webp" alt="" class="anh5">
                        </div>
                        <span class="chu">Top gimbal ch???ng rung cho ??i???n tho???i gi?? r??? t???t nh???t hi???n nay<br>
                                    <span class="chu1">N???u b???n l?? m???t ng?????i y??u th??ch nhi???p ???nh, ??ang s??? d???ng ??i???n tho???i
                                        ?????
                                        quay phim, ch???p ???nh, v?? b???t ?????u nh???n ra ??i???n tho???i kh??ng ph???i l??c n??o c??ng ????p
                                        ???ng
                                        h???t nhu c???u c???a b???n th??n....... <a href=""><span>?????c
                                                Th??m</span></a>
                        </p>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<?php include_once("mvc/view/client/footer.php"); ?>
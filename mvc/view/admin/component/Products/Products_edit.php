<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
<?php include_once('mvc/view/admin/component/search.php');?>
                <form action = "editproducts" method="POST" enctype="multipart/form-data" class="form">
                    <h1 class="form__title">SỬA SẢN PHẨM </h1>
                    <input type="hidden" name="id" value = "<?php echo $result['id']   ?>">
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "discount_code" id = "form_email" value = "<?php echo $result['discount_code'] ?>" required>
                        <label for="" class="form__label">Email</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "products_name" id = "form_email" value = "<?php echo $result['products_name'] ?>" required>
                        <label for="" class="form__label">tên máy ảnh</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "price" id = "form_email" value = "<?php echo $result['price'] ?>" required>
                        <label for="" class="form__label">giá</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "discount" id = "form_email" value = "<?php echo $result['discount'] ?>" >
                        <label for="" class="form__label">giảm giá</label>
                    </div>
                    <img src="http://localhost:81/Duanmau/public/img/<?php echo $result['image'] ?>" alt="" id = "avatar"class="libary_image"><br>
                    <div class="form__div">
                        <input type="file" class="form__input" name = "Avatar" id = "form_email" >
                        <label for="" class="form__label">img</label>
                    </div>  
                    <input type="hidden" name="img" value = "<?php echo $result['image'] ?>">
                    <?php foreach ($libary as $value):?>
                        <img src="http://localhost:81/Duanmau/public/img/<?php echo $value['image_pro'] ?>" alt=""class="libary_image">
                    <?php endforeach; ?> 
                    <div class="form__div">
                        <input type="file" class="form__input" name = "Avatars[]" multiple="multiple" id = "form_email" >
                        <label for="" class="form__label">libary</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" name = "so" multiple="multiple" id = "form_email" value = "0">
                        <label for="" class="form__label">số lượt xem</label>
                    </div>
                    <div class="form__div">
                        <fieldset>
                            <legend>mặt hàng</legend>
                            <label for="">Bình Thường</label>
                            <input type="radio" name="dac_biet" id="" value="0" 
                            <?php if ($result['dac_biet']==0):?>
                                checked=""
                            <?php endif; ?>
                            >
                            <label for="">Đặc Biệt</label>
                            <input type="radio" name="dac_biet" id="" value = "1"
                            <?php if ($result['dac_biet']==1):?>
                                checked=""
                            <?php endif; ?>
                            >
                        </fieldset>
                    </div>
                    <div class="form__div">
                        <select name="select" id="" class = "form__input" style = "padding: 10px;">
                            <?php foreach ($category as $option):?>
                                    <?php if ($result['categories_id']==$option['id']):?>
                                        <option selected value="<?php echo $option['id']; ?>"><?php echo $option['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $option['id']; ?>"><?php echo $option['name'] ?></option>
                                    <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                    <textarea name="content_products" id="content_box" cols="30" rows="10"><?php echo $result['content'] ?></textarea>
                    <input type="submit" class="form__button" name="bnt" style ="margin-bottom: 100px;margin-top:20px;">
                </form>
</div> 
    <script>
        CKEDITOR.replace('content_box')
    </script>
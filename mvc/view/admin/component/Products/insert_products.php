<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
<?php include_once('mvc/view/admin/component/search.php');?>//action = "insertproducts"
                <form action = "insertproducts"  method="POST" enctype="multipart/form-data" id="form_un" class="form">
                    <h1 class="form__title">THÊM SẢN PHẨM</h1>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name="discount_code" id="discount_code" required>
                        <label for="" class="form__label">discount_code</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "products_name" id = "products_name" required>
                        <label for="" class="form__label">products_name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "price" id = "price" required>
                        <label for="" class="form__label">price</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "discount" id = "discount" required>
                        <label for="" class="form__label">discount</label>
                    </div>
                    <div class="form__div">
                        <input type="file" class="form__input" name = "Avatar" id = "img" >
                        <label for="" class="form__label">img</label>
                    </div>
                    <div class="form__div">
                        <input type="file" class="form__input" name = "Avatars[]" multiple="multiple" id = "libary" >
                        <label for="" class="form__label">libary</label>
                    </div>
                    <div class="form__div">
                        <fieldset>
                            <legend>Vai Trò</legend>
                            <label for="">Đăc Biệt</label>
                            <input type="radio" name="dac_biet" id="" value="0">
                            <label for="">Bình Thường</label>
                            <input type="radio" name="dac_biet" id="" value = "1">
                        </fieldset>
                    </div>
                    <div class="form__div">
                        <select name="select" id="" class = "form__input" style = "padding: 10px;">
                            <?php foreach ($category as $option):?>
                                        <option value="<?php echo $option['id']; ?>"><?php echo $option['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <label for="" class="form__label">libary</label> -->
                    </div>
                    <textarea name="content_products" id="content_box" cols="30" rows="10"></textarea>
                    <input type="submit" class="form__button" name="bnt" style ="margin-bottom: 100px;margin-top:20px;" value = "gửi">
                </form>
</div> 
    <script>
        CKEDITOR.replace('content_box')
    </script>
    <script>
        $(document).ready(function () {
            $('.form_un').validate({
                rules:{
                    discount_code:"required",
                },
                message:{
                    discount_code:"k được để trống"
                }
            })
            
        });
      </script>
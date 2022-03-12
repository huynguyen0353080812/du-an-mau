<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
    <?php include_once('mvc/view/admin/component/search.php');?>
    <form action="CreatedCategory" method="POST" enctype="multipart/form-data">
        <h1 class="form__title">THÊM DANH MỤC SẢN PHẨM</h1>
        <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "name" id = "form_email" >
                        <label for="" class="form__label">Tên Danh Mục</label>
                    </div>
        <div class="form__div">
            <select class = "form__input" style = "padding: 10px;" aria-label="Default select example" name="select">
                <option value="0">lựa chọn danh mục</option>
                <?php echo $htmlOption; ?>
            </select>
        </div>
        <input type="submit" class="form__button" name="bnt">
    </form>
</div>
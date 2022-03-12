<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
    <?php include_once('mvc/view/admin/component/search.php');?>
    <form action="updateCategory" method="POST" enctype="multipart/form-data">
        <input type="hidden" name = "id" value = "<?= $result['id'];?>">
        <h1 class="form__title">SỬA DANH MỤC SẨN PHẨM</h1>
        <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "name" id = "form_email" value= "<?= $result['name'];?>" >
                        <label for="" class="form__label">Tên Danh Mục</label>
                    </div>
        <div class="form__div">
            <select name="select" id="" class = "form__input" style = "padding: 10px;">
                <option value="0">lựa chọn danh mục</option>
                <?php echo $htmlOption; ?>
            </select>
        </div>
        <input type="submit" class="form__button" name="bnt">
    </form>
</div>
<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
<?php include_once('mvc/view/admin/component/search.php');?>
                <form action = "insert_customer" method="POST" enctype="multipart/form-data" class="form">
                    <h1 class="form__title">Sign In</h1>
                    <input type="hidden" name="id" value = "<?php echo $result['id']   ?>">
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "user_name" id = "form_email" required>
                        <label for="" class="form__label">user_name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "number_phone" id = "form_email" required>
                        <label for="" class="form__label">number_phone</label>
                    </div>
                    <div class="form__div">
                        <input type="file" class="form__input" placeholder=" " name = "image" id = "form_email" required>
                        <label for="" class="form__label">image</label>
                    </div>
                    <div class="form__div">
                        <input type="Email" class="form__input" placeholder=" " name = "Email" id = "form_email" required>
                        <label for="" class="form__label">Email</label>
                    </div>
                    <div class="form__div">
                        <div class="eye_password"></div>
                        <input type="password" class="form__input" placeholder=" " name = "Password" id = "form_pass" required>
                        <label for="" class="form__label">Password</label>
                    </div>
                    <div class="form__div">
                        <fieldset>
                            <legend>Vai Trò</legend>
                            <label for="">khách hàng</label>
                            <input type="radio" name="vai_tro" id="" value="0">
                            <label for="">Nhân Viên</label>
                            <input type="radio" name="vai_tro" id="" value = "1">
                        </fieldset>
                    </div>
                    <div class="form__div">
                        <fieldset>
                            <legend>trạng thái</legend>
                            <label for="">Kích Hoạt</label>
                            <input type="radio" name="status" id="on">
                            <label for="">khóa</label>
                            <input type="radio" name="status" id="off">
                        </fieldset>
                    </div>
                    <input type="submit" class="form__button" name="bnt">
                </form>
</div> 
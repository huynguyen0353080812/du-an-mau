<?php require_once('mvc/view/admin/index.php'); ?>
<div class="main">
<?php include_once('mvc/view/admin/component/search.php');?>
                <form action = "editcustomer" method="POST" enctype="multipart/form-data" class="form">
                    <h1 class="form__title">Sign In</h1>
                    <input type="hidden" name="id" value = "<?php echo $result['id']   ?>">
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "user_name" id = "form_email" require value = "<?= $result['user_name']  ?>">
                        <label for="" class="form__label">user_name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "number_phone" id = "form_email" require value = "<?= $result['number_phone']  ?>">
                        <label for="" class="form__label">number_phone</label>
                    </div>
                    <img src="http://localhost:81/Duanmau/public/img/<?php echo $result['image'] ?>" alt="" id = "avatar"style="width:320px"><br>
                    <input type="hidden" name="cu" value = "<?php echo $result['image'] ?>">
                    <div class="form__div">
                        <input type="file" class="form__input" placeholder=" " name = "image" id = "form_email" require >
                        <label for="" class="form__label">image</label>
                    </div>
                    <div class="form__div">
                        <input type="Email" class="form__input" placeholder=" " name = "Email" id = "form_email" require value = "<?= $result['email']  ?>">
                        <label for="" class="form__label">Email</label>
                    </div>
                    <div class="form__div">
                        <div class="eye_password"></div>
                        <input type="password" class="form__input" placeholder=" " name = "Password" id = "form_pass" require >
                        <label for="" class="form__label">Password</label>
                    </div>
                    <div class="form__div">
                        <fieldset>
                            <legend>Vai Trò</legend>
                            <label for="">khách hàng</label>
                            <input type="radio" name="vai_tro" id="" value="0" 
                            <?php if ($result['role']==0):?>
                                checked=""
                            <?php endif; ?>
                            
                            >
                            <label for="">Nhân Viên</label>
                            <input type="radio" name="vai_tro" id="" value = "1"
                            <?php if ($result['role']==1):?>
                                checked=""
                            <?php endif; ?>
                            >
                        </fieldset>
                    </div>
                    <fieldset>
                    </fieldset>
                    <div class="form__div">
                        <fieldset>
                            <legend>trạng thái</legend>
                            <label for="">Kích Hoạt</label>
                            <input type="radio" name="status" id="on"
                            <?php if ($result['status']=="on"):?>
                                checked=""
                            <?php endif; ?>
                            value = "on"
                            >
                            <label for="">khóa</label>
                            <input type="radio" name="status" id="off"
                            <?php if ($result['status']=="" || $result['status']=="off"):?>
                                checked=""
                            <?php endif; ?>
                            value = "off"
                            >
                        </fieldset>
                    </div>
                    <input type="submit" class="form__button" name="bnt">
                </form>
</div> 
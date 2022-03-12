<div class="form_login">
            <div class="send_acount">
                <form action = "login" method="POST" enctype="multipart/form-data" class="form">
                    <h1 class="form__title">Sign In</h1>
                    <?php if($erros):?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: <?php echo json_encode($erros)?>,
                                text: 'Hãy Làm theo đúng hướng dẫn!',
                            })
                        </script>
                    <?php endif; ?>
                    <span style = "margin-left:60px;color:red;margin-top:250px" class ="errors"></span>
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name = "Email" id = "form_email">
                        <label for="" class="form__label">Email</label>
                    </div>
                    <div class="form__div">
                        <div class="eye_password"></div>
                        <input type="password" class="form__input" placeholder=" " name = "Password" id = "form_pass">
                        <label for="" class="form__label">Password</label>
                    </div>

                    <input type="submit" class="form__button" name="bnt">
                </form>
            </div>
            <div class="lotie">
                <div class="icon_form">
                <i class="fa fa-times" aria-hidden="true" id = "times"></i>
                </div>
                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_5ngs2ksb.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
        </div>
        <script type="text/javascript" >
            $(document).ready(function () {
                $('#form_email').on('input',function () {
                        var b = /^\w*\@[a-z]{1,5}\.com$/;
                        if (b.test($('#form_email').val())==false) {
                            form_email.style.border = '1px solid red'
                            $('.errors').html('note:Chưa Đúng Định Dạng Email')
                        }else if($('#form_email').val() == "") {
                            form_email.style.border = '1px solid red'
                            $('.errors').html('note:Đang bị trống')
                        }else{
                            form_email.style.border = '1px solid green'
                            $('.errors').html('')
                        }
                })
            });
        </script>
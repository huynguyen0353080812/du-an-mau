const login = document.getElementById('login')
const form = document.querySelector('.form_login')
const wrapper = document.querySelector('.wrapper')
const nav = document.querySelector('.nav')
const infomation = document.querySelector('.infomation')
if (login) {
    login.addEventListener("click", () => {
        form.style.visibility = 'visible'
        wrapper.classList.toggle('action1')
        nav.classList.toggle('action1')
        // infomation.style.visibility = 'visible'
        times.onclick = function () {
            form.style.visibility = 'hidden'
            wrapper.classList.toggle('action1')
            nav.classList.toggle('action1')
            // infomation.style.display = 'block'
        }
    })
}

function show_test() {
    form.style.visibility = 'visible'
    wrapper.classList.toggle('action1')
    nav.classList.toggle('action1')
    // infomation.style.visibility = 'visible'
    times.onclick = function () {
        form.style.visibility = 'hidden'
        wrapper.classList.toggle('action1')
        nav.classList.toggle('action1')
        // infomation.style.display = 'block'
    }
}
const btn = document.getElementById('#infomation');
$('#bnt_DH').click(function () {
    $.ajax({
        url: "test_name",
        method: "POST",
        success: function (data) {
            if (data == "") {
                show_test();
            } else {
                location.assign("http://localhost:81/Duanmau/bill");
            }
        }
    });
})
// hiển thị mật khẩu 
const icon = document.querySelector('.eye_password')
const form__input = document.getElementById('form_pass')
// console.log(form__input);
icon.addEventListener("click", () => {
    if (icon.classList.contains("eyes") == false) {
        form__input.type = 'text'
        icon.classList.add('eyes')
    } else if (icon.classList.contains("eyes") == true) {
        form__input.type = 'password'
        icon.classList.remove('eyes')
    }
    console.log(icon.classList.contains("eyes"));
})
// validate
const form_email = document.getElementById('form_email')
// console.log(form_email);
form_email.addEventListener("change", () => {
    form_email.style.border = '1px solid #DDDDDD'
})
form_email.addEventListener("input", () => {
    var b = /^\w*\@[a-z]{1,5}\.com$/
    if (b.test(form_email.value) == false) {
        form_email.style.border = '1px solid red'
    } else {
        form_email.style.border = '1px solid green'
    }
})
// document.getElementsByTagName
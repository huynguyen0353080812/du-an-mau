<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/fontawesome/css/all.css">
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/styles.css">
    <link rel="stylesheet" href="http://localhost:81/Duanmau/public/fontawesome-free-6.0.0/css/all.css">
    <script src="http://localhost:81/Duanmau/public/resources/ckeditor/ckeditor.js"></script>
    <script src="validator.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <span></span>
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><i class="fab fa-aws"></i></span>
                        <span class="title">
                            <h2>Brand Name</h2>
                        </span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="Dashboard">
                        <span class="icon"><i class="fa-solid fa-gift"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="Customers">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Acount</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="Comment">
                        <span class="icon"><i class="fas fa-comments"></i></span>
                        <span class="title">Comment</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="Products">
                        <span class="icon"><i class="fas fa-box-open"></i></span>
                        <span class="title">Products</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="Category">
                        <span class="icon"><i class="fas fa-clipboard-list"></i></span>
                        <span class="title">Category </span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="statistical">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="title">Statistical </span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="Decentralization">
                        <span class="icon"><i class="fas fa-user-secret"></i></span>
                        <span class="title">Decentralization</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="delete">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active')
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banding Harga | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/home_template/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/home_template/css/style.css')}}" type="text/css">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>

                <?php $a = Session::get('level');?>

                <?php if($a != ''){?>
                
                <div class="ht-right">
                    <a href="/beranda/logout" class="login-panel"><i class="fa fa-user"></i>Logout</a>
                  
                  
                </div>
            <?php }?>


                <?php if($a == ''){?>
                <div class="ht-right">
                    <a href="/beranda/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                   
                    
                </div>
            <?php }?>


            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{asset('css/home_template/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Kategori</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Atasan Wanita</a></li>
                            <li><a href="#">Atasan Pria</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Beranda</a></li>
                        <li><a href="./shop.html">Produk</a></li>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

@yield('content')


 <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="{{asset('css/home_template/img/footer-logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('css/home_template/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('css/home_template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('css/home_template/js/main.js')}}"></script>

    <script>
    $("#success-alert").fadeTo(2000, 700).slideUp(500, function(){
        $("#success-alert").slideUp(700);
    });
</script>

</body>

</html>
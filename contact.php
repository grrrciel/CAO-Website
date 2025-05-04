<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="icon/png" href="img/last.png">
    <link rel="stylesheet" href="./style.css">
    <title>Cultural Affairs Office</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
        <img src="img/loader.gif" alt="">
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2">
<!-- Logo Container -->
<div class="header__logos">
    <div class="header__logo">
        <a href="./index.html"><img src="img/clsulogo.png" alt="CLSULogo"></a>
    </div>
    <div class="header__logo">
        <a href="./index.html"><img src="img/logo.png" alt="MainLogo"></a>
    </div>
</div>

                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul class="d-flex justify-content-center">
                                <li><a href="./index.html">Home</a></li>
                                <li style="text-align: center;"><a href="#">Performing Groups</a>
                                    <ul class="dropdown">
                            
                                        <li><a href="./band.html">CLSU Band</a></li>
                                        <li><a href="./bithay.html">CLSU Bithay</a></li>
                                        <li><a href="./combo.html">CLSU Combo</a></li>
                                        <li><a href="./maestro.html">CLSU Maestro</a></li>
                                        <li><a href="./pigura.html">CLSU Pigura</a></li>
                                        <li><a href="./tanglaw.html">TangLaw CLSU</a></li>
                                    </ul> 
                                </li>                               
                                <li><a href="./announcement.html">Announcement</a></li>
                                <li><a href="./events.html">Events</a></li>
                                <li><a href="./videos.html">Videos</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 text-right">
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

<br><br><br>

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row align-items-center">
            <!-- Google Map (Left Side, Enlarged) -->
            <div class="col-lg-7">
                <div class="map-container" style="border-radius: 10px; overflow: hidden;">
                    <iframe 
                        width="100%" 
                        height="500" 
                        frameborder="0" 
                        style="border:0; border-radius: 10px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.0738638580889!2d120.9324145695439!3d15.73550178990177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3390d7001baac363%3A0x7b2577f3bdbf0c43!2sCLSU%20Cultural%20Affairs%20Office%20(CAO)!5e0!3m2!1sen!2sph!4v1740989148143!5m2!1sen!2sph">
                    </iframe>
                </div>
            </div>

            <!-- Contact Info (Right Side, Enlarged) -->
            <div class="col-lg-5">
                <div class="contact__address text-center ">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                        <br>
                    </div>
                    <ul style="list-style: none; padding: 0;">
                        <li>
                            <div>
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p>PWPM+663, CLSU Academic Affairs Office, Tuerimas St, Science City of Muñoz, Nueva Ecija</p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <br>
                            <p>clsu.cao@clsu.edu.ph</p>
                            <br>
                        </li>
                    </ul>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=clsu.cao@clsu.edu.ph" 
                        target="_blank" 
                        class="primary-btn" 
                        style="display: inline-block; padding: 15px 30px; font-size: 20px;">
                        MESSAGE US
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->



<!-- Contact Section End -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let scrollUp = document.getElementById("scrollUp");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 200) {
                scrollUp.style.display = "flex"; // Show button when scrolling down
            } else {
                scrollUp.style.display = "none"; // Hide button when at the top
            }
        });

        // Smooth scroll to top when clicked
        scrollUp.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    });
</script>

<!-- Footer Section Begin --><br>
<footer class="footer spad set-bg" data-setbg="img/footer-bg.png" style="text-align: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="footer__social"><br>
                    <h2 style="white-space: nowrap;">Cultural Affairs Office</h2>
                    <div class="footer__social__links" style="display: flex; justify-content: center; gap: 15px; margin-top: 10px;">
                        <a href="https://www.facebook.com/CulturalAffairsOfficeCLSU" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=clsu.cao@clsu.edu.ph" target="_blank">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Text -->
        <div class="footer__copyright__text" style="display: flex; justify-content: center; align-items: center; text-align: center; width: 100%; margin-top: 10px;">
            <p>Copyright © 2025 | Central Luzon State University - Cultural Affairs Office | All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
</body>

</html>
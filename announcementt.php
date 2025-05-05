<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="icon/png" href="img/last.png">
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
                    <div class="header__logo header__logo--left">
                        <a href="./index.php"><img src="img/clsulogo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul class="d-flex justify-content-center">
                                <li><a href="./index.php">Home</a></li>
                                <li style="text-align: center;"><a href="#">Performing Groups</a>
                                    <ul class="dropdown">
                            
                                        <li><a href="./band.php">CLSU Band</a></li>
                                        <li><a href="./bithay.php">CLSU Bithay</a></li>
                                        <li><a href="./maestro.php">CLSU Maestro</a></li>
                                        <li><a href="./pigura.php">CLSU Pigura</a></li>
                                        <li><a href="./tanglaw">Tanglaw CLSU</a></li>
                                    </ul> 
                                </li>                               
                                <li><a href="./announcement.php">Announcement</a></li>
                                <li><a href="./events.php">Events</a></li>
                                <li><a href="./videos.php">Videos</a></li>
                                <li><a href="./about.php">About</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 text-right">
                    <div class="header__logo header__logo--right">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->
 <br> <br> <br>
<!-- Blog Section -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <!-- Blog Cards -->
            <div class="col-lg-8">
                <div class="blog-cards">
                    <div class="card" id="blog-1">
                        <img src="img/announcement/a1.png" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">𝗖𝗟𝗦𝗨 𝗠𝗮𝗲𝘀𝘁𝗿𝗼 𝗦𝗶𝗻𝗴𝗲𝗿𝘀 𝗥𝗲𝗰𝗼𝗴𝗻𝗶𝘇𝗲𝗱 𝗯𝘆 𝘁𝗵𝗲 𝗛𝗼𝘂𝘀𝗲 𝗼𝗳 𝗥𝗲𝗽𝗿𝗲𝘀𝗲𝗻𝘁𝗮𝘁𝗶𝘃𝗲𝘀</h5>
                            <p class="card-text"><strong>Coki Gerrison | March 03, 2025</strong></p>
                            <p class="card-summary">CLSU Maestro Singers has made their mark on the global stage by winning major awards at the 5th Tokyo International Choir Competition...</p>
                            <button class="btn btn-primary read-more" onclick="toggleReadMore(1)">Read More</button>
                            <p class="card-full" style="display: none;">In a remarkable display of musical excellence, CLSU Maestro Singers has made their mark... <br>#CLSUCulturalAffairsOffice #CLSUCAO #CLSUMaestroSingers</p>
                        </div>
                    </div>
                    
                    <div class="card" id="blog-2">
                        <img src="img/announcement/a2.png" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Cultural Affairs Office Meeting</h5>
                            <p class="card-text"><strong>By Ardie Cabatin | February 18, 2025</strong></p>
                            <p class="card-summary">CLSU Cultural Affairs Office convenes for a productive meeting on February 17, 2025, to discuss upcoming cultural events...</p>
                            <button class="btn btn-primary read-more" onclick="toggleReadMore(2)">Read More</button>
                            <p class="card-full" style="display: none;">Full blog content here...</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Blog List (Right Side) -->
            <div class="col-lg-4">
                <h4>Other Announcements</h4><br>
                <ul class="blog-list">
                    <li><a href="#" onclick="toggleReadMore(1)"><img src="img/announcement/a1.png" class="blog-thumb" alt="Thumbnail 1"> CLSU Maestro Singers Recognized</a></li>
                    <li><a href="#" onclick="toggleReadMore(2)"><img src="img/announcement/a2.png" class="blog-thumb" alt="Thumbnail 2"> Cultural Affairs Office Meeting</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleReadMore(blogId) {
        var fullText = document.querySelector('#blog-' + blogId + ' .card-full');
        var summary = document.querySelector('#blog-' + blogId + ' .card-summary');
        var btn = document.querySelector('#blog-' + blogId + ' .read-more');
        
        if (fullText.style.display === "none") {
            fullText.style.display = "block";
            summary.style.display = "none";
            btn.innerText = "Read Less";
        } else {
            fullText.style.display = "none";
            summary.style.display = "block";
            btn.innerText = "Read More";
        }
    }
</script>

<style>
    .blog-cards .card {
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-img-top {
        border-radius: 10px 10px 0 0;
    }
    .blog-list {
        list-style: none;
        padding: 0;
    }
    .blog-list li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    .blog-list a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        display: flex;
        align-items: center;
    }
    .blog-thumb {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        border-radius: 5px;
    }
</style>
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

    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>+63-9XX-XXX-XXXX</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>clsu.cao@clsu.edu.ph</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>Cultural Affairs Office</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=clsu.cao@clsu.edu.ph" target="_blank" class="primary-btn">CONTACT US</a>

                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
                <p style="text-align: center;">Copyright © 2025 | Central Luzon State University - Cultural Affairs Office | All Rights Reserved</p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
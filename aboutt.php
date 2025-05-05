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
        <a href="./index.php"><img src="img/clsulogo.png" alt="CLSULogo"></a>
    </div>
    <div class="header__logo">
        <a href="./index.php"><img src="img/logo.png" alt="MainLogo"></a>
    </div>
</div>

                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="#">Performing Groups</a>
                                    <ul class="dropdown">
                                        <li><a href="./band.php">CLSU Band</a></li>
                                        <li><a href="./bithay.php">CLSU Bithay</a></li>
                                        <li><a href="./combo.php">CLSU Combo</a></li>
                                        <li><a href="./maestro.php">CLSU Maestro</a></li>
                                        <li><a href="./pigura.php">CLSU Pigura</a></li>
                                        <li><a href="./tanglaw">TangLaw CLSU</a></li>
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
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <!-- Header Section End --> <br><br><br><br><br><br>
    <style>
        body {
            background: #ffffff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .dropdown-btn {
            background: #009639;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        .content-container {
            display: none;
            justify-content: center;
            align-items: center;
            height: 80vh;
            text-align: center;
        }

        .content {
            background: hsl(0, 0%, 100%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            width: 60%;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button class="dropdown-btn" onclick="toggleContent('mission')">Mission</button>
        <button class="dropdown-btn" onclick="toggleContent('vision')">VIsion</button>
        <button class="dropdown-btn" onclick="toggleContent('philosophy')">Philosophy</button>
        <button class="dropdown-btn" onclick="toggleContent('objectives')">Objectives</button>
        <button class="dropdown-btn" onclick="toggleContent('policy')">Quality Policy Statements</button>
        <button class="dropdown-btn" onclick="toggleContent('org')">Organizational Chart</button>

        
    </div>

    <div class="content-container" id="mission">
        <div class="content">
            <h3>MISSION</h3>
            <p style="text-align: center;">CLSU shall develop globally competitive, work-ready, socially-responsible and empowered human resources who value life-long learning; and to generate, disseminate, and apply knowledge and technologies for poverty alleviation, environmental protection, and sustainable development.</p>
        </div>
    </div>

    <div class="content-container" id="vision">
        <div class="content">
            <h3>VISION</h3>
            <p style="text-align: center;">CLSU as a world-class National Research University for science and technology in agriculture and allied fields.</p>
        </div>
    </div>

    <div class="content-container" id="philosophy">
        <div class="content">
            <h3>PHILOSOPHY</h3>
            <p style="text-align: center;">The ultimate measure of the effectiveness of Central Luzon State University as an institution of higher learning is its contribution to and impact on the educational, economic, social, cultural, political, and moral well-being and environmental consciousness of the people it serves.</p>
        </div>
    </div>

    <div class="content-container" id="objectives">
        <div class="content">
            <h3>OBJECTIVES</h3>
            <p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The unification of the university cultural groups is expected to:</p>
           <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Cultivate stronger teamwork, harmony among student performers, trainers and organizers;<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Provide a more organized development programs for each group based on their expertise and competencies;<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Bring about better mastery of craft as merged groups shall concentrate on their specialized area;<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Provide equal opportunities to all cultural groups in terms of publicity, funding and marketing;<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Be harmonized as a centralized office will be assigned.</p>
        </div>
    </div>
        <div class="quality-policy" id="policy">
         <div class style:center ="content">
        <h3>QUALITY POLICY STATEMENTS</h3>
         <div class="policy-container">
            <div class="policy-item">
                <img src="img/about/1.png" alt="Service Icon" class="icon">
                <p style="text-align: center;">Excellent service to humanity is our commitment.</strong></p>
            </div>
            <div class="policy-item">
                <img src="img/about/2.jpg" alt="Commitment Icon" class="icon">
                <p style="text-align: center;">We are committed to develop globally-competent and empowered human resources, and to generate knowledge and technologies for inclusive societal development.</strong></p>
            </div>
            <div class="policy-item">
                <img src="img/about/3.png" alt="Values Icon" class="icon">
                <p style="text-align: center;">We are dedicated to uphold CLSU's core values and principles, comply with statutory and regulatory standards and to continuously improve the effectiveness of our quality management system.</strong></p>
            </div>
            <div class="policy-item">
                <img src="img/about/4.png" alt="Feedback Icon" class="icon">
                <p style="text-align: center;">Mahalaga ang inyong tinig upang higit na mapahusay ang kalidad ng aming paglilingkod.</strong></p>
            </div>
        </div>
        </div>
        </div>
    </div>
    <style>
    .quality-policy {
    padding: 20px;
    text-align: center;
    color: white;
}


.policy-container {
    display: flex;
    justify-content: space-around;
    background-color: white;
    padding: 40px 20px;
    margin: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.policy-item {
    text-align: center;
    max-width: 250px;
    padding: 10px;
}

.icon {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}


</style>
    <div class="content-container" id="org">
        <div class="content">
            <h3>ORGANIZATIONAL CHART</h3>
            <p style="text-align: center;">The ultimate measure of the effectiveness of Central Luzon State University as an institution of higher learning is its contribution to and impact on the educational, economic, social, cultural, political, and moral well-being and environmental consciousness of the people it serves.</p>
        </div>
    </div>

    <script>
        function toggleContent(id) {
            var sections = document.querySelectorAll('.content-container');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            var content = document.getElementById(id);
            content.style.display = 'flex';
        }
    </script>
</body>
</html>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>DJoz</h2>
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
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
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



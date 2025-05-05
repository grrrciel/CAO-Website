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
                                        <li><a href="./tanglaw.php">TangLaw CLSU</a></li>
                                    </ul> 
                                </li>                               
                                <li><a href="./announcement.php">Announcement</a></li>
                                <li><a href="./events.php">Events</a></li>
                                <li><a href="./videos.php">Videos</a></li>
                                <li><a href="#">About</a>
                                    <ul class="dropdown">
                                        <li><a href="./mission.php">Mission</a></li>
                                        <li><a href="./vision.php">Vision</a></li>
                                        <li><a href="./philo.php">Philosophy</a></li>
                                        <li><a href="./obj.php">Objectives</a></li>
                                        <li><a href="./qps.php">Quality Policy Statements</a></li>
                                        <li><a href="./oc.php">Oragnizational Chart</a></li>
                                        <li><a href="./dl.php">Downloadables</a></li>
                                    </ul> 

                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
<br><br><br><br><br>
<div class="about-image-container">
    <div class="content-container" id="mission">
        <div class="content">
            <h3>PHILOSOPHY</h3>
            <p style="text-align: center;">The ultimate measure of the effectiveness of Central Luzon State University as an institution of higher learning is its contribution to and impact on the educational, economic, social, cultural, political, and moral well-being and environmental consciousness of the people it serves.</p>
</div>
    </div>
    <img src="img/about/about.png" alt="About Image" class="about-image">
    <br>
      </div>
    <style> 
      /* ===== Mission Section ===== */

      .content-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        text-align: center;
      }
      
      .content {
        background-color: #ffffff;
        padding: 30px 25px;
        border-radius: 12px;
        box-shadow: 0 0 40px #009639;
        width: 100%;
      }
      
      .content h3 {
        font-size: 2rem;
        margin-bottom: 15px;
        color: #222;
      }
      
      .content p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
        margin: 0;
      }
      
      
      /* ===== About Image Section ===== */
      
      .about-image-container {
        width: 100%;
        overflow: hidden;
        padding: 0;
        margin: 0 auto;
        text-align: center;
      }
      
      .about-image {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }
      
      
      /* ===== Responsive Media Queries ===== */
      
      @media (max-width: 992px) {
        .content {
          padding: 25px 20px;
        }
      
        .content h3 {
          font-size: 1.75rem;
        }
      
        .content p {
          font-size: 1rem;
        }
      }
      
      @media (max-width: 768px) {
        .content-container {
          padding: 30px 15px;
        }
      
        .content {
          padding: 20px;
        }
      
        .content h3 {
          font-size: 1.5rem;
        }
      
        .content p {
          font-size: 0.95rem;
        }
      }
      
      @media (max-width: 480px) {
        .content h3 {
          font-size: 1.3rem;
        }
      
        .content p {
          font-size: 0.9rem;
        }
        .footer__copyright__text p {
    font-size: 14px;
    padding: 10px;
    margin: 0;
    word-wrap: break-word;
}
footer {
    flex-shrink: 0;
}

      }
    </style>      
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
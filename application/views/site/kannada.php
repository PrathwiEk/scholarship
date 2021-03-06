<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home/bootstrap.css">
        <!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home/slick.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" rel="stylesheet">
        <style>
        .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 111111;
        }
        </style>
    </head>
    <body>
        <section class="top">
            <div class="container">
                <a href="<?php echo base_url() ?>" target="_blank"><span class="grad-cap white-text">ENGLISH</span></a>
                <a href="<?php echo base_url() ?>student" target="_blank"><span class="grad-cap"><i class="fas fa-graduation-cap"></i></span><span class="top-title"> ಶೈಕ್ಷಣಿಕ ಪ್ರೋತ್ಸಾಹ ಧನ</span></a>
            <a href="<?php echo base_url() ?>contribution/" target="_blank" class="payment">
                <span class="grad-cap"><i class="fas fa-credit-card"></i></span><span class="top-title"> ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ನಿಧಿ ವಂತಿಕೆ ಪಾವತಿ</span>
        </a>
    </div>
</section>
<section class="comp-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-9 col-sm-12 col-12">
                <div class="logo">
                    <a href="">
                        <img src="<?php echo base_url() ?>assets/img/logo.png" alt="" class="logobrand">
                    </a>
                </div>
                <div class="comp">
                    <h5>ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ನಿಧಿಗೆ ವಂತಿಕೆ ಪಾವತಿಸುವ ಸಂಘಟಿತ ಕಾರ್ಮಿಕರ ಮಕ್ಕಳಿಗೆ ಶೈಕ್ಷಣಿಕ ಪ್ರೋತ್ಸಾಹ ಧನ</h5>
                    <p>ಕರ್ನಾಟಕ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ಮಂಡಳಿ</p>
                    <p>ಕಾರ್ಮಿಕ ಇಲಾಖೆ, ಕರ್ನಾಟಕ ಸರ್ಕಾರ</p>
                </div>
                
            </div>
            <!-- <div class="col-md-7 col-9">
                
            </div> -->
            <div class="col-md-3">
                <div class="comp-head">
                    <img src="<?php echo base_url() ?>assets/img/head1.jpg" alt="">
                    <img src="<?php echo base_url() ?>assets/img/head2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<nav class="navbar navbar-expand-lg custom-navbar " id="navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  custom-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="<?php echo base_url() ?>">ಮುಖಪುಟ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ನಮ್ಮ ಬಗ್ಗೆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#report">ವರದಿಗಳು</a>
                </li>
                <!--   <li class="nav-item">
                    <a class="nav-link" href="#">ಅಧಿಸೂಚನೆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ಅರ್ಜಿ ನಮೂನೆ</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#footer">ಸಂಪಕಿ೯ಸಿ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-link" href="<?php echo base_url() ?>govt/login" target="_blank"><i class="fas fa-home"></i>ಅಧಿಕೃತ ಲಾಗಿನ್</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="content">
    <div class="banner-slider ">
        <div class="banner-image">
            <img src="<?php echo base_url() ?>assets/img/banner1.jpg" alt="" class="img-fluid">
        </div>
        <div class="banner-image">
            <img src="<?php echo base_url() ?>assets/img/banner2.jpg" alt="" class="img-fluid">
        </div>
        <div class="banner-image">
            <img src="<?php echo base_url() ?>assets/img/banner3.jpg" alt="" class="img-fluid">
        </div>
        <div class="banner-image">
            <img src="<?php echo base_url() ?>assets/img/banner5.jpg" alt="" class="img-fluid">
        </div>
    </div>
</section>
<section class="news-sec">
    <div class="container-fluid">
        <div class="news-box">
            <div class="row">
                <div class="col-md-3 p0">
                    <div class="news-title">
                        <h4>ಕಲ್ಯಾಣ ಯೋಜನೆಗಳು</h4>
                    </div>
                </div>
                <div class="col-md-9 p0">
                    <div class="news">
                        <div class="news-slider">
                            <div>
                                
                                <div id="tx"></div>
                                
                            </div>
                            <div class="playpouse">
                                <button id="pause"><i class="fas fa-stop-circle ml-0" ></i> </button><button id="resume"><i class="fas fa-play"></i></button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3  bg-grey left-pad">
                <div class="row">
                    <div class="col-sm-4 col-md-12 col-lg-12">
                        <div class="card custom-card bg-grey">
                            <img src="<?php echo base_url() ?>assets/img/stu.png" alt="" style="width: 100%;">
                            
                            <div class="box">
                                <h6 class="text-center">ವಿದ್ಯಾರ್ಥಿ</h6>
                                <a href="<?php echo base_url() ?>student/login" target="_blank" class="btn">ಲಾಗಿನ್ ಮಾಡಿ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-12 col-lg-12">
                        <div class="card custom-card bg-grey">
                            <img src="<?php echo base_url() ?>assets/img/INDUST.png" alt="" style="width: 100%;">
                            <div class="box">
                                <h6 class="text-center">ಇಂಡಸ್ಟ್ರಿ</h6>
                                <a href="<?php echo base_url() ?>industry/login" target="_blank" class="btn">ಲಾಗಿನ್ ಮಾಡಿ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-12 col-lg-12">
                        <div class="card custom-card bg-grey">
                            <img src="<?php echo base_url() ?>assets/img/insti.png" alt="" style="width: 100%;">
                            <div class="box">
                                <h6 class="text-center">ಸಂಸ್ಥೆಗಳು</h6>
                                <a href="<?php echo base_url() ?>institute/" target="_blank" class="btn">ಲಾಗಿನ್ ಮಾಡಿ</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div id="about"  class="col-md-8">
                        <div class="mid-lay">
                            <div class="mid-lay-img">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="about">
                                <h4>ನಮ್ಮ ಬಗ್ಗೆ</h4>
                                <p> ಕರ್ನಾಟಕ ರಾಜ್ಯದಲ್ಲಿ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣವನ್ನು ಸಂವರ್ಧನಗೊಳಿಸುವುದಕ್ಕೆ ಹಣಕಾಸು ನೆರವು ಒದಗಿಸಲು ಮತ್ತು ಚಟುವಟಿಕೆಗಳನ್ನು ನಡೆಸುವುದಕ್ಕಾಗಿ ಒಂದು ನಿಧಿಯನ್ನು, ಕರ್ನಾಟಕ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ನಿಧಿ ಅಧಿನಿಯಮ, 1965 ಅಡಿಯಲ್ಲಿ ಸ್ಥಾಪಿಸಲಾಗಿದೆ. ಮಂಡಳಿಗೆ ವಂತಿಗೆ ಪಾವತಿಸುವ ವಿವಿಧ ಕ್ಷೇತ್ರಗಳಲ್ಲಿ ದುಡಿಯುತ್ತಿರುವ ಸಂಘಟಿತ ಕಾರ್ಮಿಕರು ಮತ್ತು, ಅವರ ಕುಟುಂಬದ ಅವಲಂಬಿತರ ಕ್ಷೇಮಾಭಿವೃದ್ಧಿಗೆ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ಮಂಡಳಿಯಲ್ಲಿ ಈ ಕೆಳಗಿನ ಯೋಜನೆಗಳು ಜಾರಿಯಲ್ಲಿರುತ್ತದೆ. </p><br>
                                <p><b> ಸೂಚನೆ: </b> ಯೋಜನೆಯ ಸೌಲಭ್ಯ ಪಡೆಯಲು ಪ್ರತಿ ವರ್ಷ ಜನವರಿ 15 ರೊಳಗೆ ಕಾರ್ಮಿಕರು, ಮಾಲೀಕರು ರೂ.20:40   ಅನುಪಾತದಲ್ಲಿ ಒಬ್ಬ ಕಾರ್ಮಿಕನಿಗೆ ಒಟ್ಟು ರೂ. 60/- ಗಳಂತೆ ವಂತಿಕೆಯನ್ನು ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ನಿಧಿಗೆ ಪಾವತಿಸತಕ್ಕದ್ದು.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div  class="col-md-4 pr-0">
                        <div class="alert-box">
                            <h4 class="alert-title"> ಅರ್ಜಿದಾರಾರ  ಗಮನಕ್ಕೆ </h4>
                            <div class="alert-message-box z-depth-2">
                                <ul id="marquee-vertical" style="height:280px">
                                    <li>
                                        <div class="alert-message">
                                            <p><b> ಆನ್‌ಲೈನ್‌ನಲ್ಲಿ ಅನ್ವಯಿಸಲು ಮಾರ್ಗಸೂಚಿಗಳು  </b> <a href="<?php echo base_url('student/login') ?>">ಕ್ಲಿಕ್ ಮಾಡಿ</a></p>
                                        </div>
                                        <div class="devider"></div>
                                    </li>
                                    <li>
                                        <div class="alert-message">
                                            <p><b> ಆನ್‌ಲೈನ್‌ನಲ್ಲಿ ಅರ್ಜಿ ಸಲ್ಲಿಸಲು ಮಾರ್ಗಸೂಚಿಗಳಿಗಾಗಿ ಸಾರ್ವಜನಿಕರಿಗೆ ಅಧಿಸೂಚನೆ ನೀಡಲಾಗಿದೆ </b> <a href="<?php echo base_url('student/login') ?>">ಕ್ಲಿಕ್ ಮಾಡಿ</a></p>
                                        </div>
                                        <div class="devider"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="report" class="col-md-12">
                        <!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div> -->
                        <canvas id="myChart" width="500" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 px-0">
                <div class="help-box">
                    <h4 class="help-title">ಸಹಾಯವಾಣಿ ಕೇಂದ್ರ</h4>
                    <div class="help-message-box">
                        <p>ತಾಂತ್ರಿಕ ಸಮಸ್ಯೆಗಳ ಪರಿಹಾರಕ್ಕಾಗಿ ಅಭ್ಯರ್ಥಿ ಸಹಾಯ ಕೇಂದ್ರವನ್ನು ಸಂಪರ್ಕಿಸಬಹುದು</p>
                        <div class="dotted-devider"></div>
                        <a href="tel:08023570266" class="help-tel" >080 2357 0266</a>
                        <div class="dotted-devider"></div>
                        <a href="mailto:welfarecommissioner123@gmail.com" class="help-mail">welfarecommissioner123@gmail.com</a>
                    </div>
                </div>
            </div>
            <!--  <div class="col-md-9 pr-0">
                <div class="e-box">
                    <h4 class="e-title">e-Initiatives</h4>
                    <div class="contents">
                        <div class="row" style="margin: 0;">
                            <div class="col-md-4">
                                <p class="listname">Lorem ipsum dolor sit dolor sit </p>
                                <div class="list-devider"></div>
                                <p class="listname">Lorem ipsum dolor sit orem ipsum dolor </p>
                                <div class="list-devider"></div>
                                <p class="listname">Lorem ipsum dolor sit orem ipsum dolor sit </p>
                            </div>
                            <div class="col-md-4">
                                <p class="listname">Lorem ipsum dolor sit dolor sit </p>
                                <div class="list-devider"></div>
                                <p class="listname">Lorem ipsum dolor sit orem ipsum dolor </p>
                                <div class="list-devider"></div>
                                <p class="listname">Lorem ipsum dolor sit orem ipsum dolor sit </p>
                            </div>
                            <div class="col-md-4">
                                <p class="listname">Lorem ipsum dolor sit dolor sit </p>
                                <div class="list-devider"></div>
                                <p class="listname">Lorem ipsum dolor sit orem ipsum dolor </p>
                                <div class="list-devider"></div>
                                <p class="listname">Lorem ipsum dolor sit orem ipsum dolor sit </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer-list">
            <div id="footer" class="row">
                <div class="col-md-4">
                    <h6 class="footer-title">ಬಗ್ಗೆ </h6>
                    <p>
                        ಕರ್ನಾಟಕ ರಾಜ್ಯದಲ್ಲಿ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣವನ್ನು ಸಂವರ್ಧನಗೊಳಿಸುವುದಕ್ಕೆ ಹಣಕಾಸು ಒದಗಿಸಲು ಮತ್ತು ಚಟುವಟಿಕೆಗಳನ್ನು ನಡೆಸುವುದಕ್ಕಾಗಿ ಒಂದು ನಿಧಿಯನ್ನು ಕರ್ನಾಟಕ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ನಿಧಿ ಅಧಿನಿಯಮ 1965 ರ ಅಡಿಯಲ್ಲಿ ಸ್ಥಾಪಿಸಲಾಗಿದೆ.
                    </p>
                </div>
                <div class="col-md-4 ">
                    <h6 class="footer-title">ಪ್ರಮುಖ ವೆಬ್‌ಸೈಟ್‌ಗಳು</h6>
                    <ul class="footer-menu">
                        <li><a class=" js-scroll-trigger" target="_blank" href="https://klwb.karnataka.gov.in/">
                        ಕರ್ನಾಟಕ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ಮಂಡಳಿ</a></li>
                        <!-- <li><a class=" js-scroll-trigger" href="#">ಸಮುದಾಯ  ಭವನ ಆನ್‌ಲೈನ್ ಬುಕಿಂಗ್
                        </a></li> -->
                        <li><a class=" js-scroll-trigger" target="_blank" href="https://labour.karnataka.gov.in/english">
                            ಕಾರ್ಮಿಕ ಇಲಾಖೆ
                        </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="footer-title">ನಮ್ಮನ್ನು ಸಂಪರ್ಕಿಸಿ</h6>
                    <p>
                        <span style="margin-bottom: -10px;display: block;"> ಕಲ್ಯಾಣ ಮಂಡಳಿ</span><br>
                        No.48, 2nd Floor,<br>
                        ಮತ್ತೀಕೆರೆ ಮುಖ್ಯ ರಸ್ತೆ, ಆರ್‌ಟಿಒ ಕಚೇರಿ ಹತ್ತಿರ,<br>
                        ಯಶವಂತಪುರ , ಬೆಂಗಳೂರು - 560022.<br>
                        Ph: <a href="tel:+08023570266">080 23570266</a>/ <a href="tel:+08023575130">23575130</a>       <br>
                        Fax: 080 23475188<br>
                        
                        Email ID: <a href="mailto:welfarecommissioner123@gmail.com">welfarecommissioner123@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footercompany">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                © Copyright <?php echo date('Y') ?>. All Rights Reserved.
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="<?php echo base_url() ?>assets/css/home/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url() ?>assets/css/home/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/css/home/bootstrap.min.js"></script>
<script src="//canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script src="<?php echo base_url() ?>assets/css/home/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/home/telex.js"></script>
<script src="<?php echo base_url() ?>assets/js/home/jquery.marquee.js"></script>
<script src="<?php echo base_url() ?>assets/js/home/newsticker.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/home/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
$(document).ready(function(){
// Add smooth scrolling to all links
$("a").on('click', function(event) {
// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") {
// Prevent default anchor click behavior
event.preventDefault();
// Store hash
var hash = this.hash;
// Using jQuery's animate() method to add smooth page scroll
// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
$('html, body').animate({
scrollTop: $(hash).offset().top
}, 800, function(){

// Add hash (#) to URL when done scrolling (default click behavior)
window.location.hash = hash;
});
} // End if
});
});
</script>
<script>
$('#tx').telex({
messages: [
{
id: 'msg1',
content: '  <h6> <span><b> ಈ ಕೆಳಗಿನ ಯೋಜನೆಗಳಿಗೆ ಮಾಸಿಕ ಸಂಬಳ ರೂ. 15,000/- ಗಿಂತ ಮೀರಿರಬಾರದು. ವಯೋಮಿತಿ 18- 60  </b></span> <span class="brd"></span> <span><b>ಕಾರ್ಮಿಕರ ಮಕ್ಕಳಿಗೆ ಶೈಕ್ಷಣಿಕ ಪ್ರೋತ್ಸಾಹ ಧನ : </b> ಪ್ರೌಡ ಶಾಲೆ, (8 ರಿಂದ 10ನೇ ತರಗತಿವರೆಗೆ) ರೂ.3,000/ ಪಿಯುಸಿ/ಡಿಪ್ಲೊಮಾ/ಐಟಿಐ/ಟಿಸಿಹೆಚ್ ಇತ್ಯಾದಿ ರೂ.4,000/-ಪದವಿ ತರಗತಿಗೆ ರೂ.5,000/ ಸ್ನಾತಕೋತ್ತರ ಪದವಿ  ತರಗತಿಗಳಿಗೆ ರೂ.6,000/-ಇಂಜಿನೀಯರಿಂಗ್/ವೈದ್ಯಕೀಯ ರೂ.10,000/-ಗಳ ಪ್ರೋತ್ಸಾಹ ಧನ ನೀಡಲಾಗುವುದು.(ಅರ್ಜಿ  ಸಲ್ಲಿಸಲು ಸಾಮಾನ್ಯ  ವರ್ಗ ಶೇ.50 ಪ.ಜಾ / ಪ.ಪಂ ಶೇ. 45 ರಷ್ಟು ಅಂಕ ಪಡೆದು ತೇರ್ಗಡೆಯಾಗಿರಬೇಕು) </span>  <span class="brd"></span> <span> <b>ಕಾರ್ಮಿಕರಿಗೆ ವೈಧ್ಯಕೀಯ ನೆರವು : </b> ಹೃದಯ ಶಸ್ತ್ರಚಿಕಿತ್ಸೆ, ಕಿಡ್ನಿ ಟ್ರಾನ್ಸ್ಪ್ಲಾಂಟೇಷನ್, ಕ್ಯಾನ್ಸರ್, ಆಂಜಿಯೋಪ್ಲಾಸ್ಟಿ, ಕಣ್ಣು,   ಆರ್ಥೋಪೆಡಿಕ್, ಗರ್ಭಕೋಶದ ಶಸ್ತ್ರ ಚಿಕಿತ್ಸೆ, ಗಾಲ್ ಬ್ಲಾಡರ್ ತೊಂದರೆ, ಮೆದುಳಿನ ರಕ್ತಸ್ರಾವ ಚಿಕಿತ್ಸೆಗೆ ಕನಿಷ್ಠ ರೂ. 1,000/-ದಿಂದ  ಗರಿಷ್ಠ  ರೂ,10,000/-ವರೆಗೆ ಮತ್ತು ಆರೋಗ್ಯ ತಪಾಸಣೆಗೆ ರೂ. 500/-ರಿಂದ ರೂ, 1000/-ವರೆಗೆ ಧನ ಸಹಾಯ ನೀಡಲಾಗುವುದು.</span> <span class="brd"></span> <span><b>ಕಾರ್ಮಿಕರ ಅಪಘಾತ ಧನ ಸಹಾಯ:</b> ಕಾರ್ಮಿಕರಿಗೆ ಕೆಲಸದ ವೇಳೆಯಲ್ಲಿ ಅಪಘಾತವಾದಲ್ಲಿ ಕನಿಷ್ಠ ರೂ. 1,000/-  ಗರಿಷ್ಠ  ರೂ 3,000/- ವರೆಗೆ ಧನ ಸಹಾಯ ನೀಡಲಾಗುವುದು. ಸೌಲಭ್ಯ ಪಡೆಯುವ ಕಾರ್ಮಿಕರು ಅಪಘಾತವಾದ ಮೂರು  ತಿಂಗಳೊಳಗೆ ಸಲ್ಲಿಸತಕ್ಕದ್ದು.</span> </h6>'
},
{
id: 'msg2',
content: ' <h6> <span><b>ಈ ಕೆಳಗಿನ ಯೋಜನೆಗಳಿಗೆ ಮಾಸಿಕ ಸಂಬಳದ ಮಿತಿಯಿರುವುದಿಲ್ಲ.  ವಯೋಮಿತಿ 18- 60 .</b></span> <span class="brd"></span> <span><b>ಮೃತ ಕಾರ್ಮಿಕನ ಅಂತ್ಯ ಸಂಸ್ಕಾರಕ್ಕೆ ಧನ ಸಹಾಯ : </b> ಈ ಯೋಜನೆಯ ಸೌಲಭ್ಯ ಪಡೆಯಬೇಕಾದರೆ ಮೃತರ ಕುಟುಂಬದ ಅವಲಂಬಿತರು ಕಾರ್ಮಿಕ ಮೃತ ಪಟ್ಟ ಆರು ತಿಂಗಳೊಳಗೆ ನಿಗಧಿತ ಅರ್ಜಿ ನಮೂನೆಯಲ್ಲಿ ಸೂಕ್ತ ದಾಖಲೆಗಳೊಂದಿಗೆ ಸಲ್ಲಿಸಿದಲ್ಲಿ, ರೂ.5,000/- ಧನ ಸಹಾಯ ನೀಡಲಾಗುವುದು.</span> <span class="brd"></span> <span><b>ವಾರ್ಷಿಕ ವೈಧ್ಯಕೀಯ ತಪಾಸಣೆ ಶಿಭಿರ ಹಮ್ಮಿಕೊಳ್ಳುವ  ಟ್ರೇಡ್ ಯೂನಿಯನ್/ಸಂಸ್ಥೆಗಳಿಗೆ ಧನಸಹಾಯ : </b> ನೋಂದಾಯಿತ ಕಾರ್ಮಿಕ ಸಂಘಟನೆಗಳು/ಸರ್ಕರರೇತರ ಸಂಸ್ಥೆಗಳು ಕಲ್ಯಾಣ ಆಯುಕ್ತರಪೂರ್ವಾನುಮತಿಯೊಂದಿಗೆ ಹಮ್ಮಿಕೊಳ್ಳುವ ವಾರ್ಷಿಕ ಆರೋಗ್ಯ ತಪಾಸಣೆ  ಶಿಭಿರಕ್ಕೆ  ರೂ. 30,000/- ಧನ ಸಹಾಯ ನೀಡಲಾಗುವುದು. ಒಂದು ಸಂಘಟನೆಗೆ ವರ್ಷದಲ್ಲಿ ಒಂದು ಬಾರಿ ಮಾತ್ರ ಈ ಸೌಲಭ್ಯ ನೀಡಲಾಗುವುದು.</span> <span class="brd"></span> <span><b>ವಾರ್ಷಿಕ ಕ್ರೀಡಾ ಕೂಟ ಹಮ್ಮಿಕೊಳ್ಳುವ ನೊಂದಾಯಿತ ಕಾರ್ಮಿಕ ಸಂಘಗಳಿಗೆ ಧನಸಹಾಯ : </b>ನೋಂದಾಯಿತ ಕಾರ್ಮಿಕ  ಸಂಘಟನೆಗಳು ಕಲ್ಯಾಣ ಆಯುಕ್ತರಪೂರ್ವಾನುಮತಿಯೊಂದಿಗೆ ವಾರ್ಷಿಕ ಕ್ರೀಡಾ ಕೂಟ ಹಮ್ಮಿಕೊಂಡಲ್ಲಿ ರೂ. 50,000/- ಧನ  ಸಹಾಯ ನೀಡಲಾಗುವುದು. ವರ್ಷದಲ್ಲಿ ಒಂದು ಸಂಘಟನೆಗೆ  ಒಂದು ಬಾರಿ ಮಾತ್ರ ಈ ಸೌಲಭ್ಯ ನೀಡಲಾಗುವುದು.</span> <span class="brd"></span> <span><b>ಧನ ಸಹಾಯವನ್ನು ಫಲಾನುಭವಿಗಳ ಉಳಿತಾಯ ಖಾತೆಗೆ ನೇರವಾಗಿ ಆರ್.ಟಿ.ಜಿ.ಎಸ್ ಮೂಲಕ ಜಮಾ ಮಾಡಲಾಗುವುದು.</b></span></h6>',
class: 'cls-second'
}
/* more messages... */
],
delay: 0,
timing:'cubic-bezier(0.1, -0.0, 0.9, 1)',
});
$("#pause").click(function () {
$("#tx").telex("pause");
});
$("#resume").click(function () {
$("#tx").telex("resume");
});
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);
(function () {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script>
$('.banner-slider').slick({
dots: false,
slidesToShow: 1,
slidesToScroll: 1,
touchMove: true,
prevArrow: '<span class="left"> <i class="fas fa-angle-left"></i> </span>',
nextArrow: '<span class="right"> <i class="fas fa-angle-right"></i> </span>',
});
</script>
<script>
$(document).ready(function() {
var lab = [];
var con = [];
var canCon = [];
// $.ajax({
// url: '<?php echo base_url("home/getordergraph") ?>',
// method: 'GET',
// async: true,
// dataType: 'json',
// success: function(dat) {
var ctx = document.getElementById('myChart').getContext('2d');
Chart.platform.disableCSSInjection = true;
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ['Applications', 'Institutes', 'Industries', 'Students', 'Male', 'Female', 'SC' ,'ST'],
datasets: [{
label: 'MIS Report',
// data: [dat.application,dat.institute,dat.industry, dat.student, dat.male,dat.female,dat.sc, dat.st],
data:[10,9,8,7.8,7,6,5,4],
backgroundColor: [
'#4f81bc',
'#c0504e',
'#9bbb58',
'#23bfaa)',
'#8064a1',
'#4aacc5',
'#f79647',
'#7f6084',
],
borderColor: [
'#4f81bc',
'#c0504e',
'#9bbb58',
'#23bfaa)',
'#8064a1',
'#4aacc5',
'#f79647',
'#7f6084',
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
},
animation: {
duration: 0 // general animation time
},
hover: {
animationDuration: 0 // duration of animations when hovering an item
},
legend: {
display: false
},
}
});
// }
// });
});
</script>
<!--     <script>
window.onload = function () {
var options = {
animationEnabled: true,
title: {
text: "MIS Report"
},
axisY: {
title: "Growth Rate (in %)",
suffix: "%",
includeZero: false
},
axisX: {
title: "Data"
},
data: [{
type: "column",
yValueFormatString: "#,##0.0#" % "",
dataPoints: [
{ label: "Applications", y: 10.09 },
{ label: "Institutes", y: 9.40 },
{ label: "Industries", y: 8.50 },
{ label: "Students", y: 7.96 },
{ label: "Male", y: 7.80 },
{ label: "Female", y: 7.56 },
{ label: "SC", y: 7.20 },
{ label: "ST", y: 7.1 }
]
}]
};
$("#chartContainer").CanvasJSChart(options);
}
</script> -->
<script type="text/javascript">
$(function () {
$('#marquee-vertical').marquee();
});
</script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
if (window.pageYOffset >= sticky) {
navbar.classList.add("sticky")
} else {
navbar.classList.remove("sticky");
}
}
</script>

</body>
</html>
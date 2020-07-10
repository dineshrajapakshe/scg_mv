<?php
include_once './top_header.php';
?>

<body class="ckav-body tooltip-light">
    <div id="loader">
        <div class="load-three-bounce">
            <div class="load-child bounce1"></div>
            <div class="load-child bounce2"></div>
            <div class="load-child bounce3"></div>
        </div>
    </div>
    <div class="ckav-body">
        <?php
        include_once './header.php';
        ?>
        <div class="ckav-home-area main-page flex-bc padding-b-medium">

            <!-- PARTICLE EFFECT -->
            <div class="full-wh full-wh zindex-1">
                <div class="height-100" id="particles-js"></div>
            </div>

            <div class="container zindex-2 align-center">

                <!-- INTRO TEXT -->
                <div class="intro-text width-70 margin-auto typo-light" data-ckav-smd="width-100 align-center">
                    <h2 class="heading xlarge bold-800" data-ckav-smd="large">Always With Music</h2>
                    <p class="heading-sub small bold-400 margin-b-0" data-ckav-smd="mini margin-b-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem asperiores delectus quas deserunt aliquid illo quos dignissimos culpa</p>
                </div>

            </div>
            <div class="bg-holder zindex-0">

                <!-- OVERLAY -->
                <b data-bgholder="overlay" class="full-wh " data-linear-gradient="rgba(1,149,251,0)|rgba(0, 0, 0, 0.6)"></b>

                <!-- BACKGROUND IMAGE -->
                <b data-bgholder="background-image" class="full-wh bg-cover bg-cc zindex-1" data-bg-image="images/bg-02.jpg"></b>

            </div>
        </div>

        <br>
        <?php include_once './grid.php'; ?>
    </div>

    <br>



    <!-- COMMON VENDOR SCRIPTS -->
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="vendor/jquery/jquery-migrate-3.0.0.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/sweetalert/sweetalert2.min.js"></script>
    <script src="vendor/jarallax/jarallax.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="vendor/swiper/js/swiper.min.js"></script>
    <script src="vendor/jQuery-viewport-checker/jquery.viewportchecker.min.js"></script>
    <script src="vendor/enquire/enquire.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/packery-mode.pkgd.min.js"></script>

    <!-- PAGE SPECIFIC VENDOR SCRIPTS -->
    <script src="vendor/particle-animation/particles.min.js"></script>	
    <script src="vendor/particle-animation/partical-animation.js"></script>	

    <!-- TEMPLATE COMMON SCRIPTS -->
    <script src="js/ckav-main.js"></script>


</body>
</html>
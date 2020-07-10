<?php
    include_once 'conn.php';
    include_once './header.php';
?>

    <body id="top">

        <!-- Banner -->
        <!--
                To use a video as your background, set data-video to the name of your video without
                its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
                formats to work correctly.
        -->
        <section id="banner" data-video="images/banner">
            <div class="inner">
                <header>
                    <h1>SCG MV</h1>
                    <p>A responsive video gallery template with a functional lightbox<br />
                        designed by <a href="https://templated.co/">Templated</a> and released under the Creative Commons License.</p>
                </header>
                <a href="#main" class="more">Learn More</a>
            </div>
        </section>

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Boxes -->
                <div class="thumbnails">
                    <?php
                    $sql = "SELECT * FROM videos";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="box">
                            <img  class="image fit" src="<?php echo $row['v_cover']; ?>" alt="" style="max-height: 200px;"/>
                            <div class="inner">
                                <h3><?php echo $row['v_title']; ?></h3>
                                <p><?php echo $row['v_des']; ?></p>
                                <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" class="button fit" data-poptrox="youtube,800x400">Watch</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <h2>Etiam veroeros lorem</h2>
                <p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a, aliquet rutrum mauris. Etiam nec lectus hendrerit, consectetur risus viverra, iaculis orci. Phasellus eu nibh ut mi luctus auctor. Donec sit amet dolor in diam feugiat venenatis. </p>

                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>
                <p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
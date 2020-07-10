  
<?php include_once 'conn.php'; ?>

<div class="container" style="margin-top: 600px;background: transparent">
    <div style="width: 100%" class="portfolio-area padding-tb-mini">   
        <div class="portfolio-widget grid-portfolio portfolio-row grid-03" data-zoom-gallery="yes" data-ckav-md="grid-02" data-ckav-sm="grid-01">
            <?php
            $sql = "SELECT * FROM videos";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div style="margin: 5px;max-width: 325px;width: auto"    class="portfolio-col ">
                    <figure class="hover-box hover-box-01">

                        <!-- OVERLAY -->
                        <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                            <div class="info-text text-center">
                                <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" data-poptrox="youtube,800x400" class=" button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-video"></i></a>
                                <a href="#" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-profile-male"></i></a>
                                <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $row['v_title']; ?></h3>
                                <p class="mr-0 fs12 op-08"> Detail</p>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <img src="<?php echo $row['v_cover']; ?>"  style="max-height: 300px;height: auto;width: auto">

                    </figure>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
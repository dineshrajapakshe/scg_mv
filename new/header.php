<header class="ckav-header-area" data-ckav-smd="padding-t-0">

    <?php
    include_once './login.php';
    ?>
    <div class="inner-wrapper">
        <div class="container-fluid padding-0">
            <div class="row align-items-center">

                <!-- LOGO -->
                <div class="col-2">
                    <a href="index.php" class="logo-wrapper width-px-80" data-ckav-smd="margin-t-10 margin-l-10 margin-b-10 width-px-60">
                        <img src="images/logo.png" alt="ckav">
                    </a>
                </div>

                <!-- NAVIGATION -->
                <div class="col-10 flex-cr">

                    <!-- MENU ICON -->
                    <div class="menu-icon-wrp display-none" data-ckav-smd="display-flex margin-r-10">
                        <div class="menu-icon">
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="navigation-wrapper align-right" data-ckav-smd="align-center">
                        <ul class="navigation-ul">

                            <?php if (!isset($_SESSION["login"])) { ?>
                                <li class="navigation-li">
                                    <a class="navigation-a" data-toggle="modal" data-target="#popup_signUp" data-dismiss="modal" id="reg-button"><i class="fa fa-user-plus"></i></a>    
                                </li>
                                <li class="navigation-li">
                                    <a href="#popup_signUp" class="navigation-a" data-page-type="inner-page" data-toggle="modal" data-target="#popup_login"><i class="fa fa-user"></i></a>    
                                </li>
                            <?php } else { ?>
                                <li class="navigation-li">
                                    <a href="data/logout.php" class="navigation-a"><i class="icon-login"></i></a>    
                                </li>
                                <li class="navigation-li">
                                    <a href="my_account.php" class="navigation-a"><i class="fa fa-user"></i></a>    
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
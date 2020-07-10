<?php
session_start();
include_once 'conn.php';
//include_once './header.php';
include_once './data/data_watch.php';
include_once 'inc/functions.php';
?>
<head>
    <link href="admin/js/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
    <?php
    include_once './popup_login.php';
    include_once './popup_register.php';
    ?>


    <div id="main" style="margin-top:2%;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">

                    <video controls style="width:100%;" autoplay="true">
                        <source src="<?php echo $row['v_video']; ?>" type="video/mp4">
                    </video>
                    <hr>
                    <div class="row">
                        <div class="col-md-11">
                            <h5><?php echo $row['v_title']; ?></h5>
                            <p><?php echo $row['v_detail']; ?></p>
                        </div>
                        <div class="col-md-1 accordion"><i class="fa fas fa-user"></i></div>
                        <div class="col-md-12">
                            <h6>Post your Comments :</h6><hr>
                            <div class="col-md-12">
                                <div class="row">
                                    <?php
                                    if ($_SESSION['login'] != '') {
                                        $user = $_SESSION['login'];
                                        ?>
                                        <form class="col-md-12" action="data/data_comment.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>">
                                                <input type="hidden" name="user" value="<?php echo $user; ?>">
                                                <input type="hidden" name="register" value="register">
                                                <input type="text" name="comment" class="col-md-10" autocomplete="off">
                                                <input type="submit" class="col-md-2 button fit" value="POST">
                                            </div>
                                        </form>
                                    <?php } ?>
                                    <?php
                                    while ($row3 = mysqli_fetch_assoc($result_comment_list)) {
                                        ?>
                                        <div class="col-md-1">
                                            <img src="admin/img/china.png" alt=""/>
                                        </div>
                                        <div class="col-md-9">
                                            <?php echo $row3['co_comment']; ?>
                                        </div>
                                        <div class="col-md-2" style="font-size:10px;;">
                                            <?php echo $row3['co_date']; ?>
                                        </div>
                                        <br><br>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result_file_list)) {
                        ?>
                        <a href="watch.php?v_id=<?= $row2["v_id"] ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= $row2["v_cover"] ?>" style="width:100%">
                                </div>
                                <div class="col-md-8">
                                    <h6><?php echo custom_echo($row2['v_title'], 25); ?></h6>
                                    <p><?php echo custom_echo($row2['v_detail'], 50); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>


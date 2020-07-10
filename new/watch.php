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
    <style>
        .checked {
            color: orange;
        }
        .accordion {
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.2s;
        }

        .panel {
            padding: 0 18px;
            display: none;
            overflow: hidden;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <?php if ($_SESSION['login'] != '') {
            ?>
            <a href="data/logout.php" style="float:right;">Logout</a>
        <?php } else { ?> 
            <a href="#popup_login" style="float:right;" data-toggle="modal" data-target="#popup_login">Login</a>
        <?php } ?>
    </div>
    <?php
    include_once './popup_login.php';
    include_once './popup_register.php';
    ?>


    <div id="main" style="margin-top:2%;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">

                    <video controls style="width:100%;">
                        <source src="<?php echo $row['v_video']; ?>" type="video/mp4">
                    </video>
                    <hr>
                    <div class="row">
                        <div class="col-md-11">
                            <h5><?php echo $row['v_title']; ?></h5>
                            <p><?php echo $row['v_detail']; ?></p>
                        </div>
                        <div class="col-md-1 accordion"><i class="fa fas fa-comments"></i></div>
                        <div class="col-md-12 panel">
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
                        <div class="row">
                            <div class="col-md-4">
                                <video controls style="width:100%;">
                                    <source src="<?php echo $row2['v_video']; ?>" type="video/*">
                                </video>
                            </div>
                            <div class="col-md-8">
                                <h6><?php echo custom_echo($row2['v_title'], 25); ?></h6>
                                <p><?php echo custom_echo($row2['v_detail'], 50); ?></p>
                            </div>
                        </div>
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


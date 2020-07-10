<?php
/*
 * BY Amila
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once './top_header.php';

include_once 'data/data_file.php';
?>
<link href="js/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<body class="hold-transition sidebar-mini">
    <?php
    if (isset($_GET['error'])) {
        $error = base64_decode($_GET['error']);
        echo '<script>  error_by_code(' . $error . ');</script>';
    }
    ?>
    <link href="css/game.css" rel="stylesheet" type="text/css"/>

    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once './navbar.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once './sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php
            $t1 = "Home";
            $t2 = "Post";
            if ($g_id == 0) {
                $t2 = $lang['New'] . " " . $t2;
            } else {

                $t2 = "Update Post";
            }
            include_once './page_header.php';
            ?>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    <div >
                                        <form action="data/register_file.php" class="templatemo-login-form" method="post" enctype="multipart/form-data" name="update_lotto">
                                            <?php
                                            if ($v_id == 0) {

                                                echo '<input type="hidden" name="action" value="register">';
                                                echo '<input type="hidden" name="v_post_date" value="' . $today . '">';
                                                echo '<input type="hidden" name="v_user" value="' . $user_act . '">';
                                            } else {

                                                echo ' <input type="hidden" name="action" value="update">';
                                                echo ' <input type="hidden" name="v_id" value="' . $v_id . '">';
                                                echo '<input type="hidden" name="v_update_by" value="' . $user_act . '">';
                                            }
                                            ?>   


                                            <div class="col-lg-12 col-md-12 form-group">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="row form-group">						
                                                            <div class="form-group" style="">
                                                                <div class="user_image">
                                                                    <?php if ($row['v_cover'] == '') { ?>
                                                                        <img name="user_image" id="profile_image"  src="img/slide.png" class="profile_image" style="max-height:150px;width:auto">
                                                                    <?php } else { ?>
                                                                        <img name="user_image" id="profile_image"  src="<?= "../" . $row['v_cover']; ?>" class="g_img  profile_image" style="max-height:150px;width:auto">
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="file" name="user_profile_image" id="user_profile_image" class="form-control"  placeholder="Username" aria-describedby="inputGroupPrepend" style="display: none;align-content: center" />
                                                            <input type="button" style="width: 30%;" value="Browse" id="browse_image" class="btn btn-block btn-success"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 ">
                                                        <div class="row form-group">

                                                            <div class="col-lg-12 col-md-12 form-group">                  
                                                                <label>Video Title :</label>
                                                                <input type="text" class="form-control" id="sl_title" placeholder="Title" name="v_title" value="<?php echo $row['v_title']; ?>" >                            
                                                            </div>



                                                        </div>
                                                        <div class="row form-group">



                                                            <div class="col-lg-12 col-md-12 form-group">                  
                                                                <label>Detail Text :</label>
                                                                <textarea  name="v_detail"  id="v_detail"   class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <h5 class="text-divider"><span>Video</span></h5>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">

                                                        <div class="input-group">
                                                            <input type="file" name="v_video" id="v_video" class="form-control"    value="<?php echo $row['v_video']; ?>" aria-describedby="inputGroupPrepend"   />

                                                        </div>

                                                        <div class="progress-bar"></div>
                                                    </div>
                                                </div>

                                            </div>



                                            <hr>


                                            <div  class="row form-group">
                                                <div class="col-lg-2 col-md-2 form-group"> 


                                                    <?php
                                                    if ($v_id != '') {


                                                        echo '<button type="submit" class="btn btn-block btn-outline-success">Update Now</button>';
                                                    } else {


                                                        echo '<button type="submit" class="btn btn-block btn-outline-secondary">ADD New</button>';
                                                    }
                                                    ?>



                                                </div>
                                                <div class="col-lg-2 col-md-2 form-group"> 
                                                    <button type="reset" class="btn btn-block btn-outline-warning">Reset</button>
                                                </div>


                                            </div>        

                                        </form>
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>






                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

    </script>
    <script>
        $('#browse_image').on('click', function (e) {

            $('#user_profile_image').click();
        });
        $('#user_profile_image').on('change', function (e) {
            var fileInput = this;
            if (fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profile_image').attr('src', e.target.result);
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        });

    </script>      

    <script>

        $(document).ready(function () {
            $("#v_detail").html('<?php echo htmlspecialchars_decode(stripslashes($row['v_detail'])); ?>');

        });



    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>

    <script src="plugins/loading/src/jquery-progress-upload.js"></script>
    <script>
        var settings = {};
        $('#v_video').setProgressedUploader(settings);
    </script>
    <!-- /.content-wrapper -->
    <?php include_once './footer.php'; ?>

</div>

</body>
</html>

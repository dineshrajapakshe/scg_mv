<?php
include_once './top_header.php';
include_once 'data/data_user.php';
?>
<body class="hold-transition sidebar-mini">
    <?php
    if (isset($_GET['error'])) {
        $error = base64_decode($_GET['error']);
        echo '<script>  error_by_code(' . $error . ');</script>';
    }
    ?>


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
$t1 = $lang['Customer'];

if ($u_id == 0) {
    $t2 = $lang['New'] . " " . $t1;
} else {

    $t2 = getUserName($u_id, $conn);
}
include_once './page_header.php';
?>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="../uploads/user/profile/avt.png"  alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?php echo $row['u_name']; ?></h3>

                                    <p class="text-muted text-center"><?php echo "Customer" ?> | <?php echo $row['u_country']; ?></p>

                                    <ul class="list-group list-group-unbordered mb-3">

                                        <li class="list-group-item">
                                            <b>Currency</b> <a class="float-right"><?php echo getCurrencyByCu_id($row['u_currency'], $conn); ?></a>
                                        </li>

                                        <li class="list-group-item">
                                            <b>Group Distributor</b> <a class="float-right">10</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Group Agent</b> <a class="float-right">80</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Group Member</b> <a class="float-right">150</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Group Player</b> <a class="float-right">13287</a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>View Orders</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>

                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                            <?php if ($u_id == 0) { ?>
                                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><?= $lang['Basic'] ?></a></li>

                                        <?php } else { ?>
                                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><?= $lang['Basic'] ?></a></li>
                                            <li class="nav-item"><a class="nav-link " href="#details" data-toggle="tab"><?= $lang['Details'] ?></a></li>
                                            <li class="nav-item"><a class="nav-link"  href="#timeline" data-toggle="tab"><?= $lang['Bank'] ?></a></li>
                                            <li class="nav-item"><a class="nav-link"  href="#passupdate" data-toggle="tab"><?= $lang['Password'] ?></a></li>

                                        <?php } ?>

                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">


                                            <form   action="data/register_user.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="update_members" >

                                                <input type="hidden" name="u_upline" value="<?php echo $_SESSION['login'] ?>">
                                                <?php
                                                if ($u_id == 0) {

                                                    echo '<input type="hidden" name="action" value="register">';
                                                } else {

                                                    echo ' <input type="hidden" name="action" value="update">';
                                                    echo ' <input type="hidden" name="u_id" value="' . $u_id . '">';
                                                }
                                                ?>

                                                <div class="form-group row">
                                                    <label for="u_username" class="col-sm-2 col-form-label"><?= $lang['User Name'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text"    class="form-control" id="u_username"  name="u_username" placeholder="<?= $lang['User Name'] ?>" value="<?php echo $row['u_username']; ?>" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="u_name" class="col-sm-2 col-form-label"><?= $lang['Name'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  class="form-control" id="u_name"  name="u_name" placeholder="<?= $lang['Name'] ?>" value="<?php echo $row['u_name']; ?>" required>
                                                    </div>
                                                </div>
                                                <?php if ($u_id == 0) { ?>
                                                    <div class="form-group row">
                                                        <label for="u_password" class="col-sm-2 col-form-label"><?= $lang['Password'] ?></label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="u_password" name="u_password" placeholder="<?= $lang['Password'] ?>"  required>
                                                        </div>
                                                    </div>
                                                <?php } ?>


                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label"><?= $lang['Phone'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="number" maxlength="4"  minlength="4" class="form-control" id="u_phone" placeholder="<?= $lang['Phone'] ?>" name="u_phone" value="<?php echo $row['u_phone']; ?>" required> 
                                                    </div>
                                                </div>

                                                <?php
                                                echo ' <div class="form-group row"> ';
                                                echo'<label for="inputSkills" class="col-sm-2 col-form-label">' . $lang['Currency'] . '</label>';
                                                echo ' <div class="col-sm-10">';
                                                echo ' <select class="form-control" name="a_currency" id="a_currency" value="' . $row['a_currency'] . '" required>';
                                                $database->loadAllCurrency($row['a_currency']);
                                                echo '</select>';
                                                echo '</div>';
                                                echo '</div>';
                                                ?>


                                             

                                                <div class="col-lg-12 col-md-12 form-group">
                                                    <div class="row">

                                                <?php if ($u_id == 0) { ?>

                                                            <div class="col-lg-3 col-md-3 form-group">
                                                                <button type="submit" name="add_new_Submit" class="btn btn-block btn-danger">Add New</button>
                                                            </div>


                                                <?php } else { ?>

                                                            <div class="col-lg-3 col-md-3 form-group">
                                                                <button type="submit" class="btn btn-block btn-success">Update Now</button>
                                                            </div>

                                                <?php } ?>
                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="tab-pane" id="details">
                                            <!-- The timeline -->

                                            <form   action="data/register_user.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="more_details" >


                                                <input type="hidden" name="u_upline" value="<?php echo $_SESSION['login'] ?>">
                                                <input type="hidden" name="action" value="update2">
                                                <input type="hidden" name="u_id" value="<?php echo $u_id; ?>">



                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label"><?= $lang['Email'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="u_email" placeholder="<?= $lang['Email'] ?>" name="u_email" value="<?php echo $row['u_email']; ?>"> 
                                                    </div>
                                                </div>

                                                   <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label"><?= $lang['City'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  id="a_city" name="a_city" class="form-control " placeholder="<?= $lang['City'] ?>" value="<?php echo $row['a_city'] ?>">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Region / State</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  id="m_state" name="m_state" class="form-control " placeholder="Your Region / State" value="<?php echo $row['m_state'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label"><?= $lang['Country'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  id="a_country" name="a_country" class="form-control " placeholder="<?= $lang['Country'] ?>" value="<?php echo $row['a_country'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputExperience" class="col-sm-2 col-form-label"><?= $lang['Address'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="u_address" name="u_address" placeholder="<?= $lang['Address'] ?>" value="<?php echo $row['u_address']; ?>">
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 col-md-12 form-group">
                                                    <div class="row">

                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="submit" class="btn btn-block btn-success">Update Now</button>
                                                        </div>



                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="timeline">
                                            <!-- The timeline -->



                                            <form   action="data/register_user.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="more_details" >

                                                <input type="hidden" name="u_type" value="<?php echo $u_type; ?>">
                                                <input type="hidden" name="u_upline" value="<?php echo $_SESSION['login'] ?>">
                                                <input type="hidden" name="action" value="update3">
                                                <input type="hidden" name="u_id" value="<?php echo $u_id; ?>">



                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label"><?= $lang['Bank Name'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="u_bank_name" placeholder="<?= $lang['Bank Name'] ?>" name="u_bank_name" value="<?php echo $row['u_bank_name']; ?>"> 
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label"><?= $lang['Account No'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="u_bank_account_no" placeholder="<?= $lang['Account No'] ?>" name="u_bank_account_no" value="<?php echo $row['u_bank_account_no']; ?>"> 
                                                    </div>
                                                </div>




                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label"><?= $lang['Bank Branch'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="u_bank_branach" placeholder="<?= $lang['Bank Branch'] ?>" name="u_bank_branach" value="<?php echo $row['u_bank_branach']; ?>"> 
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 form-group">
                                                    <div class="row">

                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="submit" class="btn btn-block btn-success">Update Now</button>
                                                        </div>



                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                        <div class="tab-pane" id="passupdate">
                                            <!-- The timeline -->

                                            <form   action="data/register_user.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="more_details" >

                                                <input type="hidden" name="u_type" value="<?php echo $u_type; ?>">
                                                <input type="hidden" name="u_upline" value="<?php echo $_SESSION['login'] ?>">
                                                <input type="hidden" name="action" value="pass">
                                                <input type="hidden" name="u_id" value="<?php echo $u_id; ?>">


                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label"><?= $lang['New Password'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="u_new_pass" placeholder="<?= $lang['New Password'] ?>" name="u_new_pass" > 
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label"><?= $lang['Confirm Password'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="u_confoirm_passs" placeholder="<?= $lang['Confirm Password'] ?>" name="u_confoirm_passs"> 
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="u_otp" class="col-sm-2 col-form-label"><?= $lang['otp'] ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="u_otp" placeholder="<?= $lang['otp'] ?>" name="u_otp" value="<?php echo $row['u_otp']; ?>"  required> 
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 form-group">
                                                    <div class="row">

                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="submit" class="btn btn-block btn-success">Update Now</button>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

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
        <!-- /.content-wrapper -->
<?php include_once './footer.php'; ?>

    </div>

</body>
</html>

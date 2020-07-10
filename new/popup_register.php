<div class="modal fade flat-popupform" id="popup_signUp">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center clearfix">
                <form id="fmlogin" name="frmlogin" method="post" action="data/data_signup.php">
                    <?php
                    $v_id = 0;
                    if (isset($_GET['v_id']) && $_GET['v_id'] != '') {
                        $v_id = $_GET['v_id'];
                    }
                    ?>
                    <input type="text" name="v_id" value='<?= $v_id ?>' readonly hidden required>
                    <h3>Registation</h3>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <label style="color:#000;">Username</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Username*" name="u_username" id="u_username" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="color:#000;">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input type="email" placeholder="User E-Mail" name="u_email" id="u_email">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="color:#000;">Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" placeholder="Password&#42;*" name="u_password" id="u_password" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="color:#000;">Confirm Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" placeholder="Password&#42;*" name="u_cpassword" id="u_cpassword" required="required">
                            </div>
                        </div>
                        <br>
                    </div>
                    <span class="wrap-button">
                        <button type="submit" class=" btn btn-success" style="width:25%;">Register</button>
                        <button type="button" data-toggle="modal" data-target="#popup_login" data-dismiss="modal" class=" btn btn-warning" title="Register" style="width:25%;">Login</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
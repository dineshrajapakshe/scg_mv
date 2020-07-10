<div class="modal fade flat-popupform" id="popup_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center clearfix">
                <form id="fmlogin" name="frmlogin" method="post" action="data/data_login.php">
                    <h3>Login</h3>
                    <div class="col-md-12">
                        <?php
                        $v_id = 0;
                        if (isset($_GET['v_id']) && $_GET['v_id'] != '') {
                            $v_id = $_GET['v_id'];
                        }
                        ?>
                        <input type="text" name="v_id" value='<?= $v_id ?>' readonly hidden required>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="color:#000;">Username</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="User E-Mail/ Mobile Number*" name="u_username" id="u_username" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="color:#000;">Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" placeholder="Password&#42;*" name="u_password" id="u_password" required="required">
                                <div class="flat-fogot clearfix">
                                    <label class="float-right link-register">
                                        <br>
                                        <a href="#">Lost your password?</a>
                                        <br><br>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <span class="wrap-button">
                        <button type="submit" id="login-button" class=" btn btn-success" title="log in" style="width:25%;">Login</button>
                        <button type="button" data-toggle="modal" data-target="#popup_signUp" data-dismiss="modal" id="reg-button" class=" btn btn-warning" title="Register" style="width:25%;">Signup</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
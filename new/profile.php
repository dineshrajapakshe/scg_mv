<?php
include_once './top_header.php';
?>
<style>
    body {
        background-image: url("images/bg-02.jpg");
        background-repeat: no-repeat;
        background-size: auto;
    }
</style>
<form class="form" action="data/update_user.php" method="post" id="registrationForm" enctype="multipart/form-data">
    <div class="ckav-home-area main-page flex-bc padding-b-medium">

        <!-- PARTICLE EFFECT -->
        <div class="full-wh full-wh zindex-2">
            <div class="height-100" id="particles-js"></div>
        </div>

        <div class="bg-holder zindex-0">
            <!-- OVERLAY -->
            <b data-bgholder="overlay" class="full-wh " data-linear-gradient="rgba(1,149,251,0)|rgba(0, 0, 0, 0.6)"></b>
            <!-- BACKGROUND IMAGE -->
            <b data-bgholder="background-image" class="full-wh bg-cover bg-cc zindex-1" data-bg-image="images/bg-02.jpg"></b>
        </div>
    </div>
    <br>
    <section class="container profile">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about">
                    <h3 class="accent">My Profile</h3>
                    <br>
                    <div class="col-lg-4 col-md-4">
                        <div class="row form-group">						
                            <div class="form-group" style="">
                                <div class="user_image">

                                    <img name="user_image" id="profile_image"  src="uploads/user/profile/<?= $_SESSION['user_det']['u_ppic'] ?>" class="profile_image" style="max-height:150px;width:auto">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="file" name="image" id="image" class="form-control file-upload"  placeholder="Username" aria-describedby="inputGroupPrepend" style="display: none;align-content: center" />
                            <input type="button"   value="Browse" id="browse_image" class="btn btn-block btn-success"/>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="container profile">
        <div class="row">

            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="first_name">First name</label>
                <input type="text" class="input-group" name="first_name" id="first_name" placeholder="first name" value="<?= $_SESSION['user_det']['u_fname'] ?>" title="enter your first name if any.">


            </div>
            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="last_name">Last name</label>
                <input type="text" class="input-group" name="last_name" id="last_name" placeholder="last name" value="<?= $_SESSION['user_det']['u_lname'] ?>" title="enter your last name if any.">


            </div>
            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="phone">Phone</label>
                <input type="text" class="input-group" name="phone" id="phone" placeholder="enter phone" value="<?= $_SESSION['user_det']['u_phone'] ?>" title="enter your phone number if any.">

            </div>
            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="email">Email</label>
                <input type="email" class="input-group" name="email" id="email" placeholder="you@email.com" value="<?= $_SESSION['user_det']['u_email'] ?>" title="enter your email.">

            </div>
            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="phone">Register Date</label>
                <input type="text" class="input-group" placeholder="Registered Date" value="<?= $_SESSION['user_det']['u_registerdt'] ?>" title="enter your phone number if any." readonly>

            </div>

            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="email">Country</label>
                <input type="email" class="input-group" id="location" placeholder="somewhere" value="<?= $_SESSION['user_det']['u_country'] ?>" title="enter a location">


            </div>

            <div class="col-md-6 col-sm-12 zindex-1">
                <br><br>
            </div>

            <div class="col-md-6 col-sm-12 zindex-1">
                <br><br>
            </div>

            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="password">Password</label>
                <input type="password" class="input-group" name="password" id="password" placeholder="password" title="enter your password.">

            </div>

            <div class="col-md-6 col-sm-12 zindex-1">

                <label for="password2">Verify</label>
                <input type="password" class="input-group" name="password2" id="password2" placeholder="password2" title="enter your password2.">

            </div>

            <div class="col-md-6 col-sm-12 zindex-1">
                <br>
                <button class="btn btn-md btn-success" name="update" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                <button class="btn btn-md btn-danger" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>

            </div>

        </div>
    </section>  
</form>

<br>

<?php
include './top_header.php';
 
if (isset($_GET['error'])) {
    $error = $_GET['error'];
} else {
    $error = '';
}
if ($error == 1) {
    echo '<script>  swal("' . $lang['Sucessfully Login'] . '", "' . $lang['Please Update your account info'] . '", "success");</script>';
}
if ($error == 2) {
    echo '<script>  swal("' . $lang['Sucessfully Updated'] . '", "' . $lang['Please use Exit Menu'] . '", "success");</script>';
}
if ($error == 3) {
    echo '<script>  swal("' . $lang['Somthing Went Wrong'] . '", "' . $lang['Sucessfully Login'] . 'please try agin", "warning");</script>';
}
if ($error == 4) {
    echo '<script>  swal("' . $lang['Please set your Currency'] . '", "' . $lang['no currency detectd'] . '", "warning");</script>';
}
include_once './loading.php';
include_once './menu.php';
if ($_SESSION['login'] == '') { ?>
    <script type="text/javascript">

        swal("<?= $lang['Please Proceed to Login']; ?>", "<?= $lang['View Your Account']; ?>", "warning");
        location = "login.php";
    </script>

<?php } else {
    $user = getUserDetails($_SESSION['login'], $conn);
}
?>

<style>
    .float{
        position:fixed;
        width:50px;
        height:50px;
        bottom: 300px;
        right:27px;
        background-color:#0C9;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        z-index:200;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float{
        margin-top:22px;

    }
</style>
<div id="content" class="snap-content">        
    <div class="header homepage-header">
        <a href="#" class="sidebar-deploy"><i class="fa fa-navicon"></i></a>
        <h3><?= $lang['My Account']; ?></h3>
        <a href="login.php" class="contact-deploy"><i class="fa fa-sign-in"></i></a>
    </div>


    <div class="page-content ">



        <div class="page-content-scroll">
            <form action="data/user_add_data.php" id="update" method="post" enctype="multipart/form-data">
                <input name="action" value="update" type="hidden">
                <input type="hidden" id="user_id"  name="user_id" value="<?php echo $user['m_id']; ?>">
                <fieldset>
                    <div class="header-clear"></div>

                    <div class="page-profile">
                        <img src="images/pictures/wall.png"  style="align-items: center; max-width: 100%; max-height: 100%; width: auto;height: auto" layout="responsive"></img> <?php if ($user['m_pic'] != '') { ?>

                            <img class="profile-thumb" src="../uploads/profile/<?php echo $user['m_pic']; ?>" name="profile_image" id="profile_image" style="height:150px;width: 150px;background-color: #ccc;border: 3px solid #77AA29;margin-bottom: 10px"></img>
                        <?php
                        } else {
                            echo ' <img src="../uploads/profile/avt.png" name="profile_image" id="profile_image" class="profile-thumb" style="height:100px;width: 100px;background-color: #ccc;border: 3px solid white;align-content: center"></img>';
                        }
                        ?>

                        <input type="file" name="user_image" id="user_profile_image" class="form-control"  placeholder="Username" aria-describedby="inputGroupPrepend" style="display: none;align-content: center" />

                    </div> 
                    <div>
                        <h1 class="center-text thin full-top half-bottom"><?php echo $user['m_name']; ?></h1>

                    </div>
                    <div class="content full-bottom">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <h2 class="checkout-title"><?= $lang['Personal Information']; ?></h2>

                            <div class="formFieldWrap">

                                <span ><span class="field-title contactNameField"></span><span class="input-text"><?= $lang['Upload Profile Picture']; ?></span></span>

                                <br>
                                <input  type="button" value="<?= $lang['Browse']; ?>" id="browse_image" name=="browse_image" class="button button-yellow"/>

                            </div> 

                            <div class="formFieldWrap "> <hr> <br></div>




                            <div class="formFieldWrap">
                                <span ><span class="field-title contactNameField"></span><span class="input-text"><?= $lang['User Name']; ?></span></span>
                                <input class="contactField" type="input" id="user_name" name="user_name"  placeholder="Short Name" value="<?php echo $user['m_username']; ?>" >

                            </div>



                            <div class="formFieldWrap">
                                <span ><span class="field-title contactNameField"></span><span class="input-text"><?= $lang['Full Name']; ?></span></span>
                                <input class="contactField" type="input" id="user_fname" name="user_fname"  placeholder="Full Name" value="<?php echo $user['m_name']; ?>" >



                            </div>
                            
                            

                            <section id="user_address_section">
                            <div class="formFieldWrap">
                                <span ><span class="field-title contactNameField"></span><span class="input-text"><?= $lang['Billing Address']; ?>&#42;</span></span>
                                <input type="input"  id="user_address" name="user_address" class="contactField" placeholder="Billing Address" value="<?php echo $user['m_address']; ?>" >

                            </div>
                            
                             <div class="formFieldWrapp">                  
                                <span ><span class="field-title contactNameField"></span><span class="input-text">City&#42;</span></span>
                                <input type="text" class="contactField" id="m_city" placeholder="City" name="m_city" value="<?php echo $user['m_city']; ?>">                            
                            </div>
                            
                             <div class="formFieldWrapp">                  
                                <span ><span class="field-title contactNameField"></span><span class="input-text">Region / State&#42;</span></span>
                                <input type="text" class="contactField" id="m_state" placeholder="Region" name="m_state" value="<?php echo $user['m_state']; ?>">                            
                            </div>
                             <div class="formFieldWrapp">                  
                                <span ><span class="field-title contactNameField"></span><span class="input-text">Country&#42;</span></span>
                                <input type="text" class="contactField" id="m_country" placeholder="Country" name="m_country" value="<?php echo $user['m_country']; ?>">                            
                            </div>
                            
                            <div class="formFieldWrapp">                  
                                <span ><span class="field-title contactNameField"></span><span class="input-text">Post Code&#42;</span></span>
                                <input type="text" class="contactField" id="m_post_code" placeholder="post Code" name="m_post_code" value="<?php echo $user['m_post_code']; ?>">                            
                            </div>

                            </section>

                           

                           

                           

                            <div class="formFieldWrap">
                                <span ><span class="field-title contactNameField"></span><span class="input-text"><?= $lang['Date Of Birth']; ?></span></span>
                                <input type="date"  id="user_dob" name="user_dob" class="contactField" placeholder="YYYY/MM/DD" value="<?php echo $user['m_dob']; ?>" >

                            </div>



                            <div class="formFieldWrap">
                                <span ><span class="field-title contactNameField"></span><span class="input-text">Whats APP ID</span></span>
                                <input type="text" id="user_whatsapp" name="user_whatsapp"  class="form-control contactField" placeholder="WhatsApp ID" value="<?php echo $user['m_whatsapp']; ?>">
                            </div>



                            <div class="formFieldWrap">

                                <button type="submit" value="Submit"class="button button-yellow full-button"><i class="fa fa-send-o"></i><?= $lang['Submit']; ?></button>
                            </div >
                            <br>
                            <div class="formFieldWrap">
                                <button type="reset" value="Reset" class="button button-red full-button"><i class="fa fa-refresh"></i><?= $lang['Reset']; ?></button>
                            </div>

                            <br>
                            <br>

                        </div>
                    </div>    
                </fieldset> 
            </form>

  





        </div>

    </div>
</div>

</div>



<?php
include_once './footer.php';
?>

</body>

<script type="text/javascript">
    $('#browse_image').on('click', function (e) {

        $('#user_profile_image').click();
    });

    $('#user_profile_image').on('change', function (e) {

        var fileInput = this;
        if (fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
    });

</script>



</html>
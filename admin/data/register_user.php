<?php

 include_once '../../conn.php';
 include_once '../../inc/functions.php';
 

 //Fetching Values from URL
if (isset($_POST['u_id'])) { $u_id= $_POST['u_id'];}else{ $u_id= 0;}

if (isset($_POST['u_username'])) { $u_username= $_POST['u_username'];}else{ $u_username= '';}
if (isset($_POST['u_password'])) { $u_password= $_POST['u_password'];}else{ $u_password= '';}
if (isset($_POST['u_phone'])) { $u_phone= $_POST['u_phone'];}else{ $u_phone= '';}
if (isset($_POST['u_email'])) { $u_email= $_POST['u_email'];}else{ $u_email= '';}
if (isset($_POST['u_upline'])) { $u_upline= $_POST['u_upline'];}else{ $u_upline= 0;}
if (isset($_POST['u_currency'])) { $u_currency= $_POST['u_currency'];}else{ $u_currency= 0;}
if (isset($_POST['u_name'])) { $u_name= $_POST['u_name'];}else{ $u_name= '';}
if (isset($_POST['u_country'])) { $u_country= $_POST['u_country'];}else{ $u_country= '';}
if (isset($_POST['u_city'])) { $u_city= $_POST['u_city'];}else{ $u_city= '';}
if (isset($_POST['u_phone'])) { $u_phone= $_POST['u_phone'];}else{ $u_phone= '';}
if (isset($_POST['u_email'])) { $u_email= $_POST['u_email'];}else{ $u_email= '';}
if (isset($_POST['u_address'])) { $u_address= $_POST['u_address'];}else{ $u_address= '';}
if (isset($_POST['u_bank_name'])) { $u_bank_name= $_POST['u_bank_name'];}else{ $u_bank_name= '';}
if (isset($_POST['u_bank_account_no'])) { $u_bank_account_no= $_POST['u_bank_account_no'];}else{ $u_bank_account_no= '';} 
if (isset($_POST['u_bank_branach'])) { $u_bank_branach= $_POST['u_bank_branach'];}else{ $u_bank_branach= '';} 
if (isset($_POST['u_old_passs'])) { $u_old_passs= $_POST['u_old_passs'];}else{ $u_old_passs= '';} 
if (isset($_POST['u_new_pass'])) { $u_new_pass= $_POST['u_new_pass'];}else{ $u_new_pass= '';}
if (isset($_POST['u_confoirm_passs'])) { $u_confoirm_passs= $_POST['u_confoirm_passs'];}else{ $u_confoirm_passs= '';}
if (isset($_POST['u_otp'])) { $u_otp= $_POST['u_otp'];}else{ $u_otp= '';}
if (isset($_POST['u_ref'])) { $u_ref= $_POST['u_ref'];}else{ $u_ref= '';}





//Action 
$action = $_POST['action'];



$hash_password = password_hash($u_password, PASSWORD_DEFAULT);
 

// image location 
//$target_dir = "../../uploads/user/profile/";
//$m_img = uploadPic("user_profile_image", $target_dir);

// manage user levels 

    if($u_id==0){
        $u_type5_by=$u_upline;
        $u_otp= rand(1000, 9999);
        $u_ref=rand(1000, 9999);
    }else{
        
         $u_type5_by = getaAdminLastLevel($u_upline,$conn);
        
    }
    
    
    $u_type4_by = getaAdminUpline($u_type5_by, $conn);
    $u_type3_by = getaAdminUpline($u_type4_by, $conn);
    $u_type2_by = getaAdminUpline($u_type3_by, $conn);
    $u_type1_by = getaAdminUpline($u_type2_by, $conn);
 
    if ($u_currency == 0) {
    $u_currency = getAdminCurrency($u_type5_by, $conn);
}

    $u_country= getaAdminCountry($u_type5_by, $conn);
    $u_city= getaAdminCity($u_type5_by, $conn);
//date 
$today = date('Y-m-d');

     
     if ($action == 'register') {
    
          if ($u_username != '' && $u_password != ''  && $u_currency >0 && $u_phone !='') {
           
            $sqlcheck = "SELECT * FROM users WHERE u_username='" . $u_username . "'";
            $result = mysqli_query($conn, $sqlcheck);
            
             
            if (mysqli_num_rows($result) > 0) {
                header('Location: ../user.php?type=' . base64_encode($u_type). '&error='.base64_encode(5));
            } else {
                $sql = "INSERT INTO users (u_username,u_name,u_password,  u_type1_by, u_type2_by, u_type3_by, u_type4_by, u_type5_by,u_upline,u_currency,u_city,u_country,u_register_by,u_register_date,u_status,u_phone,u_otp) VALUES ('" . $u_username . "','" . $u_name . "', '" . $hash_password . "',  '" . $u_type1_by . "', '" . $u_type2_by . "', '" . $u_type3_by . "', '" . $u_type4_by . "', '" . $u_type5_by . "','" . $u_upline . "','" . $u_currency . "', '" . $u_city . "', '" . $u_country . "', '" . $u_upline . "', '" . $today . "','1', '" . $u_phone . "','" . $u_otp . "')";
               
                if (mysqli_query($conn, $sql)) {

                    header('Location: ../user_list.php?error='.base64_encode(4));
                } else {
                    header('Location: ../user.php?error='.base64_encode(3));
                }
            }
    
    } else {
        header('Location: ../user.php?error='.base64_encode(3));
    }
         
     }
     
     
   
 if ($action == 'update' && $u_id > 0) {


      $sql = "update users set  u_name='" . $u_name . "', u_phone='" . $u_phone . "', u_username ='" . $u_username . "'  where u_id='" . $u_id . "'";
      
      
        if (mysqli_query($conn, $sql)) {

                     header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(1));
                     exit();
                } else {
                     header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(3));
                }
        
        

    if ($u_username != '') {

        $sqlcheck = "SELECT * FROM users WHERE u_username='" . $u_username . "'";
        $result = mysqli_query($conn, $sqlcheck);
 
        if (mysqli_num_rows($result) == 0) {

            $sql = "update users set  u_username='" . $u_username . "'   where u_id='" . $u_id . "'";

           if (mysqli_query($conn, $sql)) {

                     header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(1));
                } else {
                     header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(2));
                }
        } else {

             header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(3));
             exit();
        }
    }

}


 if ($action == 'update2' && $u_id > 0) {


      $sql = "update users set  u_phone='" . $u_phone . "', u_email ='" . $u_email . "', u_address='" . $u_address . "'  where u_id='" . $u_id . "'";
    
        if (mysqli_query($conn, $sql)) {

                   header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(1));
                } else {
                     header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(2));
                }
       
}


 if ($action == 'update3' && $u_id > 0) {



      $sql = "update users set  u_bank_name='" . $u_bank_name . "',u_bank_account_no ='" . $u_bank_account_no . "', u_bank_branach='" . $u_bank_branach . "'  where u_id='" . $u_id . "'";
   
     
        if (mysqli_query($conn, $sql)) {

                header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(6));
                      exit();
                } else {
                    header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(3));
                }
       
}

 if ($action == 'pass' && $u_id > 0) {



    if (strcmp($u_new_pass, $u_confoirm_passs)) { 
        header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(2));
        exit();
    }elseif ($u_new_pass!='') {
         $hash_pw_2 = password_hash($u_new_pass, PASSWORD_DEFAULT);
    $sql = "update users set  u_password='" . $hash_pw_2 . "'   where u_id='" . $u_id . "'";


    if (mysqli_query($conn, $sql)) {

          header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(7));
    } else {
         header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(3));
    }
        
    }
    
    if($u_otp !=''){
        
         $sql = "update users set  u_otp='" . $u_otp . "'   where u_id='" . $u_id . "'";


    if (mysqli_query($conn, $sql)) {

          header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(7));
    } else {
         header('Location: ../user.php?u_id=' . base64_encode($u_id) . '&error='.base64_encode(3));
    }
        
        
    }

   
}

function uploadPic($file_name, $target_dir) {

    if (($_FILES[$file_name]["name"]) != '') {
        $target_user_image = $target_dir . basename($_FILES[$file_name]["name"]);
        $uploadFileType_user_image = pathinfo($target_user_image, PATHINFO_EXTENSION);
        $newfilename_user_image = round(microtime(true)) . UniqueRandomNumbersWithinRange(0, 100, 1)[0] . '.' . $uploadFileType_user_image;

        if (basename($_FILES[$file_name]["name"]) != '') {
            if ($uploadFileType_user_image != "jpg" && $uploadFileType_user_image != "png" && $uploadFileType_user_image != "jpeg" && $uploadFileType_user_image != "gif" && $uploadFileType_user_image != "JPG" && $uploadFileType_user_image != "PNG" && $uploadFileType_user_image != "JPEG" && $uploadFileType_user_image != "GIF") {
                return '';
            } else {

                if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_dir . $newfilename_user_image)) {

                    return $newfilename_user_image;
                } else {

                    return '';
                }
            }
        }
    } else {

        return '';
    }
}

function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

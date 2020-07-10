<?php
 
 include_once '../../conn.php';
 include  '../../inc/imageUpload.php';
  include  '../../inc/videoUpload.php';
//Fetching Values from URL


 //Fetching Values from URL
if (isset($_POST['v_id'])) { $v_id= $_POST['v_id'];}else{ $v_id= 0;}

if (isset($_POST['v_title'])) { $v_title= $_POST['v_title'];}else{ $v_title= '';}
if (isset($_POST['v_user'])) { $v_user= $_POST['v_user'];}else{ $v_user= 0;}
if (isset($_POST['v_post_date'])) { $v_post_date= $_POST['v_post_date'];}else{ $v_post_date= '';}
if (isset($_POST['v_detail'])) { $v_detail= $_POST['v_detail'];}else{ $v_detail= '';}
if (isset($_POST['v_update_by'])) { $v_update_by= $_POST['v_update_by'];}else{ $v_update_by= 0;}
if (isset($_POST['v_updatedt'])) { $v_updatedt= $_POST['v_updatedt'];}else{ $v_updatedt= '';}

//Action 
$action = $_POST['action'];

// image 
$target_dir = "../../uploads/user/files/img/";
$targ_front="./uploads/user/files/img/"; 
$tmp =getResizeImg("user_profile_image", $target_dir,700,394);
if($tmp!=''){
    
    $v_cover=$targ_front.$tmp;
}else{
    $v_cover='';
}

//video
$target_v_dir = "../../uploads/user/files/video/";
$targ_v_front="./uploads/user/files/video/"; 
$tmp_v =uploadVideo("v_video", $target_v_dir);
 
if($tmp_v!=''){
    
    $v_video=$targ_v_front.$tmp_v;
}else{
    $v_video='';
}



if ($action == 'register') {
 
    $sql = "INSERT INTO `videos` ( `v_title`, `v_user`, `v_video`, `v_cover`, `v_post_date`, `v_status`,  `v_detail`) "
            . "VALUES ( '$v_title', '$v_user', '$v_video', '$v_cover', '$v_post_date', '0',  '$v_detail')";
    
 
    if (mysqli_query($conn, $sql)) {
        header('Location: ../file_list.php?error=' . base64_encode(4));
    } else {
        header('Location: ../file.php?error=' . base64_encode(3));
    }
}

if ($action == 'update' && $v_id > 0) {
    
    if($v_video!==''){
        $sql_v=", v_video='" . $v_video . "'";
    }else{
        $sql_v='';
    }
    
    if($v_cover!==''){
        $sql_img=", v_cover='" . $v_cover . "'";
    }else{
        $v_cover='';
    }


    $sql = "update videos set  v_title='" . $v_title . "', v_detail ='" . $v_detail. "'$sql_img  $sql_v  where v_id='" . $v_id . "'";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../file.php?v_id=' . base64_encode($v_id) . '&error=' . base64_encode(1));
        exit();
    } else {
        header('Location: ../file.php?v_id=' . base64_encode($v_id) . '&error=' . base64_encode(3));
    }
}

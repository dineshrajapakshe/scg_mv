<?php
 
 if (isset($_GET['v_id'])) {
    $v_id = base64_decode( $_GET['v_id']);     
    $sql="select * from videos where v_id='".$v_id."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
    
} else {
   $v_id = 0; 
}



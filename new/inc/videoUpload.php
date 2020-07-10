<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Amila
 */

            

function uploadVideo($file_name,$target_dir){
    
   $allowedExts = array( "mp4", "wma");
   $extension = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);
   $newfilename = round(microtime(true)) .rand(1000, 9999) . '.' . $extension;
 
    	if (($_FILES[$file_name]["name"]) != '') {
		  
   
        if ((($_FILES[$file_name]["type"] == "video/mp4")) && in_array($extension, $allowedExts)) {
            //CHECKING FOR FILE'S ERROR---------------------------------------------------------------- 
            
            if ($_FILES[$file_name]["error"] > 0)
                    {
                            echo "Return Code: " . $_FILES[$file_name]["error"] . "<br />";
                    }elseif (($_FILES[$file_name]["error"] == 0)) {
                        
                   
               
                //MOVING IMAGE TO EXISITING FOLDER--------------------------------------------------------
                move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_dir . $newfilename);
                return $newfilename;
          
            }  
        }
  
		}else{

            return '';
        }




}


              
            
 
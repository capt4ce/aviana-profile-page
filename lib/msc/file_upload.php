<?php
  function uploadFile($targetDir, $file, $name){
    if(isset($file)){
      $errors= array();
      $file_type = $file['type'];
      $file_ext = strtolower(end(explode('.',$file['name'])));
      $file_name = date("ymdhisa")."_".$name.".".$file_ext;
      $file_size = $file['size'];
      $file_tmp = $file['tmp_name'];
      
      $extension= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extension)=== false){
         $errors[]="Extension file harus berupa JPEG, JPG, atau PNG.";
      }
      
      if($file_size > 2097152){
         $errors[]='Ukuran file harus dibawah 2mb';
      }
      
      if(empty($errors)==true){
         $result = move_uploaded_file($file_tmp, $targetDir.$file_name);
         return $file_name;
      }else{
         return $errors;
      }
   }
  }
?>

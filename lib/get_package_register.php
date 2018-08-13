<?php
  require_once("db_init.php");

  $query = "SELECT 
  id,
  package_choice,
  person_name,
  person_address,
  person_city,
  person_phone,
  person_email,
  business_name,
  business_slogan,
  business_address,
  business_phone,
  app_logo_path,
  app_color_theme,
  status
  FROM package_registration;";
  
  $result = mysqli_query($conn,$query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
  mysqli_close($conn);
?>

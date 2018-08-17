<?php
  require_once("db_init.php");

  $limit = 10;
  $start = 0;
  if (isset($_GET["limit"])) $limit = intval($_GET["limit"]);
  if (isset($_GET["page"])) $start = (intval($_GET["page"])-1)*$limit;
  $end = $start+$limit;

  $queryGet = "SELECT 
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
  referal,
  status
  FROM package_registration LIMIT $start,$end;";
  
  if (!isset($_POST["tickRecord"])){
    $result = mysqli_query($conn,$queryGet) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
    // mysqli_close($conn);
  }
?>

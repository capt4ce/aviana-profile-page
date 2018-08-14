<?php
  require_once("db_init.php");
  require_once("msc/file_upload.php");
  require_once("msc/result_notification.php");
  $errors= array();

  if (isset($_POST["irsPackage"]) && isset($_POST["personName"]) && isset($_POST["personPhone"]) && isset($_POST["businessName"]) && isset($_POST["businessPhone"])){
      if (trim($_POST["irsPackage"])=="") $errors[]="Paket yang dipilih tidak boleh kosong.";
      if (trim($_POST["personName"])=="") $errors[]="Nama tidak boleh kosong.";
      if (trim($_POST["personPhone"])=="") $errors[]="No. kontak tidak boleh kosong.";
      if (trim($_POST["businessName"])=="") $errors[]="Nama bisnis tidak boleh kosong.";
      if (trim($_POST["businessPhone"])=="") $errors[]="No. kontak bisnis tidak boleh kosong.";

      $personName=mysqli_real_escape_string($conn, $_POST["personName"]);
      $personAddress=mysqli_real_escape_string($conn, $_POST["personAddress"]);
      $personCity=mysqli_real_escape_string($conn, $_POST["personCity"]);
      $personPhone=mysqli_real_escape_string($conn, $_POST["personPhone"]);
      $personEmail=mysqli_real_escape_string($conn, $_POST["personEmail"]);
      $businessName=mysqli_real_escape_string($conn, $_POST["businessName"]);
      $buseinessSlogan=mysqli_real_escape_string($conn, $_POST["buseinessSlogan"]);
      $businessAddress=mysqli_real_escape_string($conn, $_POST["businessAddress"]);
      $businessPhone=mysqli_real_escape_string($conn, $_POST["businessPhone"]);
      $appColorTheme=mysqli_real_escape_string($conn, $_POST["appColorTheme"]);
      $irsPackage=mysqli_real_escape_string($conn, $_POST["irsPackage"]);
      $referal=mysqli_real_escape_string($conn, $_POST["referal"]);

      //processing upload logo
      $logo = uploadFile($uploadDir, $_FILES["appLogo"], $businessName);
      if (is_array($logo) == true && empty($logo) == false)
        $errors = array_merge($errors, $logo);

      $appLogoPath = mysqli_real_escape_string($conn, $logo);
      if (empty($errors) == true){
        $query = "INSERT INTO package_registration(package_choice,
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
          referal)
          
          values('$irsPackage',
            '$personName',
            '$personAddress',
            '$personCity',
            '$personPhone',
            '$personEmail',
            '$businessName',
            '$buseinessSlogan',
            '$businessAddress',
            '$businessPhone',
            '$appLogoPath',
            '$appColorTheme',
            '$referal');";

          mysqli_query($conn,$query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);
      }

      mysqli_close($conn);
      $resultMessage = notificationResult($errors, "Order anda telah kami terima, akan kami proses dalam beberapa waktu.");
      if (!empty($errors)) return;

      $_POST["personName"] = '';
      $_POST["personAddress"] = '';
      $_POST["personCity"] = '';
      $_POST["personPhone"] = '';
      $_POST["personEmail"] = '';
      $_POST["businessName"] = '';
      $_POST["buseinessSlogan"] = '';
      $_POST["businessAddress"] = '';
      $_POST["businessPhone"] = '';
      $_POST["appColorTheme"] = '';
      $_POST["referal"] = '';
    }
?>

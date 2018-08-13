<?php
  require_once('config.php');
  require_once('db_init.php');
  require_once("msc/result_notification.php");
  $errors= array();
  if (isset($_POST["username"]) && isset($_POST["password"])){
    $usr = mysqli_real_escape_string($conn, $_POST["username"]);
    $passwd = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_passwd = hash("sha256", $passwd.$hash_salt);

    $query = "SELECT username, password FROM admin where username='$usr' && password='$hashed_passwd';";
    $result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($conn), E_USER_ERROR);

    if (mysqli_num_rows($result)==0)
      $errors[] = "Username/password anda salah";
    
    $resultMessage = notificationResult($errors, "Login Berhasil");
    if (empty($errors)){
      header('Location: '."/admin/requests.php");
      session_start();
      $_SESSION["username"] = $usr;
    }

  }
?>

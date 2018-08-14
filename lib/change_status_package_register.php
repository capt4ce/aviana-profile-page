<?php
  require_once("db_init.php");
  require_once("msc/result_notification.php");
  
  if (isset($_POST["tickRecord"])){
    $tickRecord = $_POST["tickRecord"];
    $newStatus = mysqli_real_escape_string($conn, $_POST["newStatus"]);
    if (is_array($tickRecord)){
      $query = '';
      foreach($tickRecord as $record){
        $id = mysqli_real_escape_string($conn, $record);
        $query.="UPDATE package_registration SET status='$newStatus' WHERE id=$id;";
      }
    }
    else {
      $query.="UPDATE package_registration SET status='$newStatus' WHERE id=$tickRecord;";
    }
    $query.=$queryGet;
    $result;
    if (mysqli_multi_query($conn, $query)) {
      do {
          if (!mysqli_more_results($conn)) {
            $result = mysqli_store_result($conn);
          }
      } while (mysqli_next_result($conn));
    }
    $resultMessage = notificationResult($errors, "Status record telah berhasil diubah.");
  }

?>

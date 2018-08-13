<?php
  function notificationResult($errors, $successMessage){
    if (empty($errors))
      $result = "<div class=\"alert alert-success\" role=\"alert\">
                  $successMessage
                </div>";
    else{
      $errorMessage = '';
      foreach ($errors as $error){
        $errorMessage .= "<li>$error</li>";
      }

      $result = "<div class=\"alert alert-danger\" role=\"alert\">
                  <ul>
                    $errorMessage
                  </ul>
                </div>";
      unset($error);
    }
    return $result;

  }
?>

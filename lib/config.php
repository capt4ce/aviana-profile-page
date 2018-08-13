<?php
  $config = simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/lib/config.xml") or die("failed to load configuration file");
  $system_obj = $config -> system_conf;
  $upload_dir = $system_obj -> upload_dir;
  $uploadDir = $_SERVER['DOCUMENT_ROOT'].$upload_dir;
  $hash_salt = $system_obj -> hash_salt;
?>

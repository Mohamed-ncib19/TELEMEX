<?php
   if (!defined('DB_SERVER')) {
      define('DB_SERVER', 'localhost');
  }
  
  if (!defined('DB_USERNAME')) {
      define('DB_USERNAME', 'root');
  }
  
  if (!defined('DB_PASSWORD')) {
      define('DB_PASSWORD', '');
  }
  
  if (!defined('DB_DATABASE')) {
      define('DB_DATABASE', 'teleme6060_telemex');
  }
  
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   mysqli_query($db,"SET CHARACTER SET 'utf8'");
   mysqli_query($db,"SET SESSION collation_connection ='utf8_unicode_ci'");
?>
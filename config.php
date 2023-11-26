<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'teleme6060_telemex');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   mysqli_query($db,"SET CHARACTER SET 'utf8'");
   mysqli_query($db,"SET SESSION collation_connection ='utf8_unicode_ci'");
?>
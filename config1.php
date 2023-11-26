<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "teleme6060_telemex"; /* Database name telemex */



// $host = "185.98.131.90"; /* Host name */
// $user = "telef971907"; /* User */
// $password = "bonjour1234"; /* Password */
// $dbname = "telef971907"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
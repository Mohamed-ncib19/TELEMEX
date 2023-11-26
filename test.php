<?php

include('./config.php');


echo "success";
echo $_SERVER['REQUEST_METHOD'];
$db->close();
?>
<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
        
    extract($_POST,EXTR_OVERWRITE);

    $updatecharg="UPDATE `chargement` SET `rate`=\"$rating\", `statutenvoi`=2
                  WHERE `id_charg`=\"$item_id\"";

                  echo $updatecharg;
            
            $rs=mysqli_query($db,$updatecharg);


    echo "Success";
}

?>
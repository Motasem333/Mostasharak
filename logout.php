<?php
session_start();

foreach($_SESSION as $key=> $value){
    if ($key != "lock_timestamp_24h"){
        unset($_SESSION[$key]);

    }
}
session_destroy();
header('location:Home.php');
exit();

?>
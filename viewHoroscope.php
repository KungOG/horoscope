<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="GET")   {
    if(isset($_SESSION["horoscope"])) {
        echo json_encode($_SESSION["horoscope"]);
        die;
    }
    else{
        echo json_encode("");
    }
}
?>
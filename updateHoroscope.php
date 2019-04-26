<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["day"]) && isset($_POST["month"])) {

        $day = $_POST["day"];
        $month = $_POST["month"];

        if (!isset($_SESSION["horoscope"])) {
            $_SESSION["horoscope"]
            echo json_decode(true);
            die;
        }   else {
            echo json_decode(false);
        }
    }
}
?>
<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_SESSION["starsign"])) {
        echo json_encode($_SESSION['starsign']);        
    } else {
        echo json_encode("");
    }

?>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if(!isset($_SESSION["starsign"])) {
        echo json_encode("Det finns inget att ta bort.");
    } else {
        session_destroy();
        echo json_encode("Ditt horoskop har nu raderats.");
    }
}
?>
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if($_SESSION["horoscope"] == null) {
        echo "true"
    } else {
        echo "else"
        session_destroy();
    }
} else {
    echo "Not a Request by Delete"
}

?>


<?php 

session_start();
if (isset($_POST['birthdate'])) {
    $_SESSION['birthdate'] = $_POST['birthdate'];
}

echo $_SESSION['birthdate'];
?>
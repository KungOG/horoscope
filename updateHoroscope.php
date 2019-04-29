<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["birthdate"]) && isset($_SESSION["starsign"])) {

    $date = $_POST["birthdate"];
    include_once('./database.php');
    $database = new Database();
    $sql = "SELECT * FROM horoscope WHERE (dateFrom <= '$date') AND (dateTo >= '$date');";
    $query = $database->connection->prepare($sql);
    $query->execute();
    $result = $query->fetchObject();
    
    $_SESSION["starsign"] = $result->horoscopeSign;
    echo json_encode(true);

} else {
    echo json_encode(false);
}
?>
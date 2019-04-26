<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "horoscope";

// Create connection
$conn = mysqli_connect(
    $servername, 
    $username,
    $password,
    $dbname
);

// Check connection
if ($conn->connect_error) {
    die( "Connection failed: ".$conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laboration 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="scss/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="content">
        <form action="" method="post">
            <p>Välj Födelsedatum nedan</p>
            <input type="date" name="birthdate">
            <input type="submit" name="submit">
        </form>
        <p>Mitt Horoskop</p>
        <div class="btn">
            <a href="#" onclick="fetchData()" class="fetch">Spara</a>
            <a href="#" onclick="updateData()" class="update">Uppdatera</a>
            <a href="#" onclick="deleteData()" class="delete">Radera</a>
        </div>
    </div>
</body>
</html>
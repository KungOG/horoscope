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
            <p>Fyll i ditt Födelsedatum nedan</p>
            <input type="date" name="birthdate"  id="birthdate">
            <div class="btn">
                <a href="#" onclick="fetchData()" class="fetch">
                <img src="img/like.svg" alt="">Spara</a>
                <a href="#" onclick="updateData()" class="update">
                <img src="img/repeat.svg" alt="">Uppdatera</a>
                <a href="#" onclick="deleteData()" class="delete">
                <img src="img/garbage.svg" alt="">Radera</a>
            </div>
        </form>
        <div id="horoscope"></div>
    </div>
</body>
</html>
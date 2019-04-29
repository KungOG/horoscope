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
            <h3>Ange ditt Födelsedatum nedan för att se ditt horoskop</h3>
            <input type="date" name="birthdate"  id="birthdate">
        </form>
        <article>
            <div class="btn">
                <a href="#" onclick="fetchData()" class="fetch">
                <img src="img/like.svg" alt=""></a>
                <p>Save</p>
            </div>
            <div class="btn">
                <a href="#" onclick="updateData()" class="update">
                <img src="img/repeat.svg" alt=""></a>
                <p>Update</p>
            </div>  
            <div class="btn">
                <a href="#" onclick="deleteData()" class="delete">
                <img src="img/garbage.svg" alt=""></a>
                <p>Delete</p>
            </div>
            </article>
        <div id="horoscope"></div>
    </div>
</body>
</html>
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "favorite color is " . $_SESSION["FavoriteColor"] . "<br>";
    echo "Favorite Animal is " . $_SESSION["FavoriteAnimal"] . "<br>";


    echo isset($_SESSION["FavoriteColor"]);
    
    
    ?>
</body>
</html>
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
$_SESSION["FavoriteColor"] = "blue";
$_SESSION["FavoriteAnimal"] ="Cat";

echo "session is set";

print_r($_SESSION);
?>

    
</body>
</html>
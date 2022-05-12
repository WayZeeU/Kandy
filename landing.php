<?php
session_start();
if (!isset($_SESSION['user']))
    header('Location:home.php');



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>bonjour!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
    <a href="deconnexion.php" class="btn-danger btn-lg">Déconnexion</a>
    <a href="home.php" class="btn-danger btn-lg">retour à l'accueil</a>


</body>

</html>
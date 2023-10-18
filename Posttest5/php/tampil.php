<?php
    $username = "";
    $notelp = "";
    $email = "";
    $password = "";
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = htmlspecialchars($_POST["username"]);
        $password = $_POST["password"];
    }
    if(isset($_POST["username"]) && isset($_POST["notelp"]) && isset($_POST["email"]) && isset($_POST["password"])){
        $username = htmlspecialchars($_POST["username"]);
        $notelp = $_POST["notelp"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tampil.css">
    <title>Profil</title>
</head>
<body>
    <section class="profil">
        <div class="border">
            <h1>Profil</h1>
            <img src="../img/profil.png" alt="">
            <p><?= $username?></p>
            <p><?= $notelp?></p>
            <p><?= $email?></p>
            <p><?= $password?></p>
            <button class="kembali"><a href="../index.html">Home</a></button>
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
    </section>
</body>
</html>
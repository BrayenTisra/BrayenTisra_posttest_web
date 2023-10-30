<?php
    require "koneksi.php";

    if(isset($_POST['sigin'])){
        $username = $_POST['username'];
        $notelp = $_POST['notelp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        $result = mysqli_query($conn, 'SELECT * FROM akun WHERE username = "$username"');

       if(mysqli_fetch_assoc($result)){
            echo"
            <script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'siginup.php'; 
            </script>
            ";
       }else{
        if($password === $cpassword){
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = mysqli_query($conn, "INSERT INTO akun VALUES('','$username', '$notelp', '$email', '$password')");
            if(mysqli_affected_rows($conn) > 0){
                echo "
                <script>
                    alert('Registrasi Berhasil!');
                    document.location.href = 'tampil.php'; 
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('Registrasi Gagal!');
                    document.location.href = 'siginup.php'; 
                </script>
                ";
            }
        }else{
            echo "
                <script>
                    alert('konfirmasi password tidak sesuai!');
                    document.location.href = 'siginup.php'; 
                </script>
                ";
            }
       }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/siginup.css">
    <title>Login Page</title>
</head>
<body>
    <section class="border">
        <h1>Sig In</h1><br>
        <form action="" method="post">
            <label for="username">Username : </label><br>
            <input type="text" placeholder="Username" name = "username"><br>
            <label for="notelp">Nomor Telepon : </label><br>
            <input type="number" placeholder="No Telp" name = "notelp"><br>
            <label for="email">Email : </label><br>
            <input type="email" placeholder="Email" name = "email"><br>
            <label for="password">Password : </label><br>
            <input type="password" placeholder="Password" name = "password"><br>
            <label for="cpassword">Confirm Password : </label><br>
            <input type="password" placeholder="Confirm Password" name = "cpassword">
            <br>
            <br>
            <button type="submit" name="sigin">SIG IN</button>
        </form>
    </section>
</body>
</html>
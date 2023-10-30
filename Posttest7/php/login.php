<?php
    session_start();
    require "koneksi.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                header('Location: data.php');
                exit;
            }else{
                echo "
                    <script>
                        alert('password anda salah!');
                        document.location.href = 'login.php'; 
                    </script>
                ";
            }
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Page</title>
</head>
<body>
    <section class="border">
        <h1>Login</h1><br>
        <?php
            if(isset($error)){
            echo "<p style='color: red;'>Username atau Password SALAH!</P>";
            }
        ?>
        <form class="form" action="" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" id=""><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id=""><br>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Have an account? <a class="nanya" href="siginup.php">Sig In</a></p>
    </section>
</body>
</html>
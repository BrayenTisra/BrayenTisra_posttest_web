<?php
require "koneksi.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from request where id = '$id'");

$request = [];

while ($row = mysqli_fetch_assoc($result)) {
    $request[] = $row;
}

$request = $request[0];

if (isset($_POST["Edit"])) {
    $nama_req = $_POST["nama_req"];
    $judul = $_POST["judul"];
    $nama_pelukis = $_POST["nama_pelukis"];
    $tahun_buat = $_POST["tahun_buat"];

    $result = mysqli_query($conn, "update request set nama_req = '$nama_req', judul = '$judul', nama_pelukis = '$nama_pelukis', tahun_buat = '$tahun_buat' where id = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'data.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Edit Data</title>
</head>
<body>
    <div class="border">
        <h2>Form Edit Data</h2><br>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Nama Anda : </label><br>
            <input type="text" name="nama_req" id="" value="<?=$request["nama_req"]?>"> <br>
            <label for="">Judul Lukisan : </label><br>
            <input type="text" name="judul" id="" value="<?=$request["judul"]?>"> <br>
            <label for="">Nama Pelukis : </label><br>
            <input type="text" name="nama_pelukis" id="" value="<?=$request["nama_pelukis"]?>"> <br>
            <label for="">Tahun Lukisan Di Buat : </label><br>
            <input type="number" name="tahun_buat" value="<?=$request["tahun_buat"]?>"> <br><br>
            <button class="btn" type="submit" name="Edit">Edit</button>
        </form>
    </div>
</body>
</html>
<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from request");

$request = [];

while ($row = mysqli_fetch_assoc($result)) {
    $request[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/data.css">
    <title>Data</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama Request</th>
            <th>Judul Lukisan</th>
            <th>Nama Pelukis</th>
            <th>Tahun Pembuatan</th>
            <th>Lukisan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($request as $req) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?php echo $req["nama_req"] ?> </td>
                <td> <?= $req["judul"] ?> </td>
                <td> <?= $req["nama_pelukis"] ?> </td>
                <td> <?= $req["tahun_buat"] ?> </td>
                <td> <img src="../img/<?= $req['lukisan'] ?>" alt="ini lukisan" width="100px" height="60px"> </td>
                <td><a href="edit.php?id=<?=$req["id"];?>" ><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="hapus.php?id=<?=$req["id"];?>"><i class="fa-solid fa-trash"></i> </a></td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table><br>
    <div class="btn">
        <button><a href="req.php">Tambah</a></button>
        <button><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>
<?php
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $nama_req = $_POST["nama_req"];
    $judul = $_POST["judul"];
    $nama_pelukis = $_POST["nama_pelukis"];
    $tahun_buat = $_POST["tahun_buat"];
    $lukisan = $_FILES['lukisan']['name'];
    $explode = explode('.', $lukisan);
    $ekstensi = strtolower(end($explode));
    $lukisan_baru = date('Y-m-d') . ' ' . $nama_req . '.' . $ekstensi;
    $tmp = $_FILES['lukisan']['tmp_name'];
    
    if(move_uploaded_file($tmp, '../img/' . $lukisan_baru))
    {
        $result = mysqli_query($conn, "insert into request 
        (id, nama_req, judul, nama_pelukis, tahun_buat, lukisan) 
        values ('', '$nama_req', '$judul', '$nama_pelukis', '$tahun_buat', '$lukisan_baru')");

        if ($result) {
            echo "
                    <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'data.php';
                    </script>
                ";
        } else {
                echo_error_log($result) . "
                <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'req.php';
                </script>
            ";
        }
    }else{
        echo "gagal mengupload lukisan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/req.css">
    <title>Request Content</title>
</head>
<body>
    <div class="border">
        <h2>Form Request Content</h2><br>
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <label for="">Nama Anda : </label> <br>
            <input type="text" name="nama_req" id=""> <br>
            <label for="">Judul Lukisan : </label> <br>
            <input type="text" name="judul" id=""> <br>
            <label for="">Nama Pelukis : </label> <br>
            <input type="text" name="nama_pelukis" id=""> <br>
            <label for="">Tahun Lukisan Di Buat : </label> <br>
            <input type="number" name="tahun_buat" id=""> <br> 
            <label for="">File Lukisan</label> <br>
            <input type="file" name="lukisan" id=""> <br> <br>
            <button class="btn" type="submit" name="tambah">Tambah</button>
        </form>
    </div>
</body>
</html>
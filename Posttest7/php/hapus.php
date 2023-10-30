<?php
require "koneksi.php";

$request = [];
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from request where id = '$id'");
while ($row = mysqli_fetch_assoc($result)) {
    $request[] = $row;
}

foreach ($request as $rqst) :
    $status=unlink('../img/'.$rqst['lukisan']);
    if ($status) {
        mysqli_query($conn, "delete from request where id = '$id'");   
        echo "
        <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'data.php';
        </script>
        ";
    } else {
        mysqli_query($conn, "delete from request where id = '$id'");   
        echo "
        <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'data.php';
    </script>
    ";
    }
endforeach;
<?php
include "../config.php";
$id_skala = $_POST['id_skala'];
$value = $_POST['value'];
$keterangan = $_POST['keterangan'];
$sql = "INSERT INTO skala (id_skala, value, keterangan) VALUES
        ('$id_skala','$value', '$keterangan')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtskala.php');
} else {
    echo "Gagal";
}
?>
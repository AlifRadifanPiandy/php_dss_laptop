<?php
include "../config.php";
$id_skala = $_POST['id_skala'];
$value = $_POST['value'];
$keterangan = $_POST['keterangan'];
$sql = "UPDATE skala SET value = '$value', keterangan = '$keterangan' WHERE id_skala = '$id_skala'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtskala.php');
} else {
    echo "Gagal";
}
?>
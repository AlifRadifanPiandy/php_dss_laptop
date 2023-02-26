<?php
include "../config.php";
$id_kriteria = $_POST['id_kriteria'];
$nm_kriteria = $_POST['nm_kriteria'];
$jenis = $_POST['jenis'];
$sql = "INSERT INTO kriteria (id_kriteria, nm_kriteria, jenis) VALUES
        ('$id_kriteria','$nm_kriteria', '$jenis')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtkriteria.php');
} else {
    echo "Gagal";
}
?>
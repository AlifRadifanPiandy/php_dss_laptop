<?php
include "../config.php";
$id_kriteria = $_POST['id_kriteria'];
$nm_kriteria = $_POST['nm_kriteria'];
$jenis = $_POST['jenis'];
$sql = "UPDATE kriteria SET nm_kriteria = '$nm_kriteria', jenis = '$jenis' WHERE id_kriteria = '$id_kriteria'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtkriteria.php');
} else {
    echo "Gagal";
}
?>
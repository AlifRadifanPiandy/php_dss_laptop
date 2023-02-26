<?php
include "../config.php";
$id_kriteria = $_GET['id_kriteria'];
$sql = "DELETE FROM kriteria WHERE id_kriteria = '$id_kriteria'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtkriteria.php');
} else {
    echo "Gagal";
}
?>
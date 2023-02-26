<?php
include "../config.php";
$id_bobot = $_POST['id_bobot'];
$id_kriteria = $_POST['id_kriteria'];
$valuebobot = $_POST['valuebobot'];
$sql = "UPDATE bobot SET id_kriteria = '$id_kriteria', valuebobot = '$valuebobot' WHERE id_bobot = '$id_bobot'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtbobot.php');
} else {
    echo "Gagal";
}
?>
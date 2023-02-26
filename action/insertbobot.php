<?php
include "../config.php";
$id_bobot = $_POST['id_bobot'];
$id_kriteria = $_POST['id_kriteria'];
$valuebobot = $_POST['valuebobot'];
$sql = "INSERT INTO bobot (id_bobot, id_kriteria, valuebobot) VALUES
        ('$id_bobot','$id_kriteria', '$valuebobot')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtbobot.php');
} else {
    echo "Gagal";
}
?>
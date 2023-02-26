<?php
include "../config.php";
$id_skala = $_GET['id_skala'];
$sql = "DELETE FROM skala WHERE id_skala = '$id_skala'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtskala.php');
} else {
    echo "Gagal";
}
?>
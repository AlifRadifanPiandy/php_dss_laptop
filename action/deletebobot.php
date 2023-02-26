<?php
include "../config.php";
$id_bobot = $_GET['id_bobot'];
$sql = "DELETE FROM bobot WHERE id_bobot = '$id_bobot'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtbobot.php');
} else {
    echo "Gagal";
}
?>
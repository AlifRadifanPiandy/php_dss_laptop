<?php
include "../config.php";
$id_nilai = $_GET['id_nilai'];
$sql = "DELETE FROM penilaian WHERE id_nilai = '$id_nilai'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
        header('Location: ../views/dtpenilaian.php');
} else {
        echo "Gagal";
}
?>
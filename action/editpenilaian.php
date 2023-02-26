<?php
include "../config.php";
$id_nilai = $_POST['id_nilai'];
$idalternatif = $_POST['idalternatif'];
$id_bobot = $_POST['id_bobot'];
$id_skala = $_POST['id_skala'];
$sql = "UPDATE penilaian SET idalternatif = '$idalternatif', id_bobot = '$id_bobot', id_skala = '$id_skala' WHERE id_nilai = '$id_nilai'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtpenilaian.php');
} else {
    echo "Gagal";
}
?>
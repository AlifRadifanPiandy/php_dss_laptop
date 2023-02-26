<?php
include "../config.php";
$id_nilai = $_POST['id_nilai'];
$idalternatif = $_POST['idalternatif'];
$id_bobot = $_POST['id_bobot'];
$id_skala = $_POST['id_skala'];
$sql = "INSERT INTO penilaian (id_nilai, idalternatif, id_bobot, id_skala) VALUES ('$id_nilai', '$idalternatif', '$id_bobot', '$id_skala')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
        header('Location: ../views/dtpenilaian.php');
} else {
        echo "Gagal";
}
?>
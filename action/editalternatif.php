<?php
include "../config.php";
$idalternatif = $_POST['idalternatif'];
$nmalternatif = $_POST['nmalternatif'];

$sql = "UPDATE alternatif SET nmalternatif = '$nmalternatif' WHERE idalternatif = '$idalternatif'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtalternatif.php');
} else {
    echo "Gagal";
}
?>
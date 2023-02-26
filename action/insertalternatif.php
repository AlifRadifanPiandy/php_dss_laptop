<?php
include "../config.php";
$idalternatif = $_POST['idalternatif'];
$nmalternatif = $_POST['nmalternatif'];
$sql = "INSERT INTO alternatif (idalternatif, nmalternatif) VALUES
        ('$idalternatif', '$nmalternatif')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtalternatif.php');
} else {
    echo "Gagal";
}
?>
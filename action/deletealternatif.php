<?php
include "../config.php";
$idalternatif = $_GET['idalternatif'];
$sql = "DELETE FROM alternatif WHERE idalternatif = '$idalternatif'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: ../views/dtalternatif.php');
} else {
    echo "Gagal";
}
?>
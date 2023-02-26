<?php
include("headerold.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Result-Multimoora</title>
</head>

<body>

    <div class="m-md-4">
        <h1>Multimoora 1</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Nilai</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Pra</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM multimoora_1";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['id_nilai'] . "</td>";
                    echo "<td>" . $data['idalternatif'] . "</td>";
                    echo "<td>" . $data['nmalternatif'] . "</td>";
                    echo "<td>" . $data['id_kriteria'] . "</td>";
                    echo "<td>" . $data['nm_kriteria'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>" . $data['id_bobot'] . "</td>";
                    echo "<td>" . $data['valuebobot'] . "</td>";
                    echo "<td>" . $data['nilai'] . "</td>";
                    echo "<td>" . $data['keterangan'] . "</td>";
                    echo "<td>" . $data['pra'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>Multimoora 2</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Nilai</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Pra</th>
                    <th scope="col">Normalisasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM multimoora_2";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['id_nilai'] . "</td>";
                    echo "<td>" . $data['idalternatif'] . "</td>";
                    echo "<td>" . $data['nmalternatif'] . "</td>";
                    echo "<td>" . $data['id_kriteria'] . "</td>";
                    echo "<td>" . $data['nm_kriteria'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>" . $data['id_bobot'] . "</td>";
                    echo "<td>" . $data['valuebobot'] . "</td>";
                    echo "<td>" . $data['nilai'] . "</td>";
                    echo "<td>" . $data['keterangan'] . "</td>";
                    echo "<td>" . $data['pra'] . "</td>";
                    echo "<td>" . $data['normalisasi'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>Multimoora 3</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Nilai</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Pra</th>
                    <th scope="col">Normalisasi</th>
                    <th scope="col">Normalisasi Bobot</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM multimoora_3";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['id_nilai'] . "</td>";
                    echo "<td>" . $data['idalternatif'] . "</td>";
                    echo "<td>" . $data['nmalternatif'] . "</td>";
                    echo "<td>" . $data['id_kriteria'] . "</td>";
                    echo "<td>" . $data['nm_kriteria'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>" . $data['id_bobot'] . "</td>";
                    echo "<td>" . $data['valuebobot'] . "</td>";
                    echo "<td>" . $data['nilai'] . "</td>";
                    echo "<td>" . $data['keterangan'] . "</td>";
                    echo "<td>" . $data['pra'] . "</td>";
                    echo "<td>" . $data['normalisasi'] . "</td>";
                    echo "<td>" . $data['normalisasibobot'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>Multimoora 4</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM multimoora_4";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['idalternatif'] . "</td>";
                    echo "<td>" . $data['hasil'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
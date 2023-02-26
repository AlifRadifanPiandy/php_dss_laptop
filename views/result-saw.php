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
    <title>Result-SAW</title>
</head>
 
<body>
    <div class="m-md-4">
        <h1>Data Rangking</h1>
        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Laptop</th>
                    <th scope="col">Rangking</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM vrangking ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['nmalternatif'] . "</td>";
                    echo "<td>" . $data['rangking'] . "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>Data Matrix Keputusan</h1>
        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis Kriteria</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM viewmatrixkeputusan ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['nm_kriteria'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>" . $data['valuebobot'] . "</td>";
                    echo "<td>" . $data['keterangan'] . "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>Data Normalisasi</h1>
        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis Kriteria</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Normalisasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM vnormalisasi ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['nm_kriteria'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>" . $data['valuebobot'] . "</td>";
                    echo "<td>" . $data['keterangan'] . "</td>";
                    echo "<td>" . $data['normalisasi'] . "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
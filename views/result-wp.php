<?php 
include("headerold.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Result-WP</title>
</head>

<body>
    <div class="m-md-4">
        <h1>WP Jumbobot</h1>
        <!-- <a href="formskala.php" class="btn btn-info me-2">New Skala</a> -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jumlah</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM wp_jumbobot";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['jumlah'] . "</td>";
                    // echo "<td>";
                    // echo "<a href='update_hewan.php?id=" . $data['id_skala'] . "' class='btn btn-primary me-2'> Edit </a>";
                    // echo "<a href='../action/proses-delete-hewan.php?id=" . $data['id_skala'] . "' class='btn btn-danger me-2'> Delete </a>";
                    // echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <br>            

    <div class="m-md-4">
        <h1>WP NilaiS</h1>
        <!-- <a href="formskala.php" class="btn btn-info me-2">New Skala</a> -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Nilai S</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM wp_nilais ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['idalternatif'] . "</td>";
                    echo "<td>" . $data['nmalternatif'] . "</td>";
                    echo "<td>" . $data['nilaiS'] . "</td>";
                    // echo "<td>";
                    // echo "<a href='update_hewan.php?id=" . $data['id_skala'] . "' class='btn btn-primary me-2'> Edit </a>";
                    // echo "<a href='../action/proses-delete-hewan.php?id=" . $data['id_skala'] . "' class='btn btn-danger me-2'> Delete </a>";
                    // echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>WP NilaiV</h1>
        <!-- <a href="formskala.php" class="btn btn-info me-2">New Skala</a> -->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Nilai V</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM wp_nilaiv ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['idalternatif'] . "</td>";
                    echo "<td>" . $data['nmalternatif'] . "</td>";
                    echo "<td>" . $data['nilaiV'] . "</td>";
                    // echo "<td>";
                    // echo "<a href='update_hewan.php?id=" . $data['id_skala'] . "' class='btn btn-primary me-2'> Edit </a>";
                    // echo "<a href='../action/proses-delete-hewan.php?id=" . $data['id_skala'] . "' class='btn btn-danger me-2'> Delete </a>";
                    // echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>WP Normalisasi Terbobot</h1>
        <!-- <a href="formskala.php" class="btn btn-info me-2">New Skala</a> -->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Normalisasi W</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM wp_normalisasiterbobot ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['id_bobot'] . "</td>";
                    echo "<td>" . $data['id_kriteria'] . "</td>";
                    echo "<td>" . $data['valuebobot'] . "</td>";
                    echo "<td>" . $data['jumlah'] . "</td>";
                    echo "<td>" . $data['normalisasi_w'] . "</td>";
                    // echo "<td>";
                    // echo "<a href='update_hewan.php?id=" . $data['id_skala'] . "' class='btn btn-primary me-2'> Edit </a>";
                    // echo "<a href='../action/proses-delete-hewan.php?id=" . $data['id_skala'] . "' class='btn btn-danger me-2'> Delete </a>";
                    // echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>WP Pangkat</h1>
        <!-- <a href="formskala.php" class="btn btn-info me-2">New Skala</a> -->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
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
                    <th scope="col">Normalisasi W</th>
                    <th scope="col">Pangkat</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM wp_pangkat ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
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
                    echo "<td>" . $data['normalisasi_w'] . "</td>";
                    echo "<td>" . $data['pangkat'] . "</td>";
                    // echo "<td>";
                    // echo "<a href='update_hewan.php?id=" . $data['id_skala'] . "' class='btn btn-primary me-2'> Edit </a>";
                    // echo "<a href='../action/proses-delete-hewan.php?id=" . $data['id_skala'] . "' class='btn btn-danger me-2'> Delete </a>";
                    // echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br>

    <div class="m-md-4">
        <h1>WP Sums</h1>
        <!-- <a href="formskala.php" class="btn btn-info me-2">New Skala</a> -->
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                    <th scope="col">Jumlah</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM wp_sums ";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['jum'] . "</td>";
                    // echo "<td>";
                    // echo "<a href='update_hewan.php?id=" . $data['id_skala'] . "' class='btn btn-primary me-2'> Edit </a>";
                    // echo "<a href='../action/proses-delete-hewan.php?id=" . $data['id_skala'] . "' class='btn btn-danger me-2'> Delete </a>";
                    // echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
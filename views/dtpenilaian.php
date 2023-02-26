<?php 
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Penilaian</title>
</head>

<body>
    <div class="m-md-4">
        <h1>Data Penilaian</h1>
        <a href="formpenilaian.php" class="btn btn-info me-2 mb-2">New Penilaian</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Nilai</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Skala</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM penilaian";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $data['id_nilai']; ?></td>
                        <td><?php echo $data['idalternatif']; ?></td>
                        <td><?php echo $data['id_bobot']; ?></td>
                        <td><?php echo $data['id_skala']; ?></td>
                        <td>
                            <a href="viewpenilaian.php?id_nilai=<?php echo $data['id_nilai']; ?>" class="btn btn-warning me-2">Edit</a>
                            <a href="../action/deletepenilaian.php?id_nilai=<?php echo $data['id_nilai']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
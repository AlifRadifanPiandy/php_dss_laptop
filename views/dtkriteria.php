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
    <title>Kriteria</title>
</head>

<body>
    <div class="m-md-4">
        <h1>Data Kriteria</h1>
        <a href="formkriteria.php" class="btn btn-info me-2 mb-2">New Kriteria</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM kriteria";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td scope="row"><?php echo $data['id_kriteria'] ?></td>
                        <td><?php echo $data['nm_kriteria'] ?></td>
                        <td><?php echo $data['jenis'] ?></td>
                        <td>
                            <a href="viewkriteria.php?id_kriteria=<?php echo $data['id_kriteria'] ?>" class="btn btn-warning me-2">Edit</a>
                            <a href="../action/deletekriteria.php?id_kriteria=<?php echo $data['id_kriteria'] ?>" class="btn btn-danger me-2">Delete</a>
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
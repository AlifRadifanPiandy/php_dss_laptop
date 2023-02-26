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
    <title>Skala</title>
</head>

<body>
    <div class="m-md-4">
        <h1>Data Skala</h1>
        <a href="formskala.php" class="btn btn-info me-2 mb-2">New Skala</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Skala</th>
                    <th scope="col">Value</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM skala";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $data['id_skala']; ?></td>
                        <td><?php echo $data['value']; ?></td>
                        <td><?php echo $data['keterangan']; ?></td>
                        <td>
                            <a href="viewskala.php?id_skala=<?php echo $data['id_skala']; ?>" class="btn btn-warning me-2">Edit</a>
                            <a href="../action/deleteskala.php?id_skala=<?php echo $data['id_skala']; ?>" class="btn btn-danger me-2">Delete</a>
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
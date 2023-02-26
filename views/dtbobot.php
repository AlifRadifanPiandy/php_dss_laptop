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
    <title>Bobot</title>
</head>

<body>
    <div class="m-md-4">
        <h1>Data Bobot</h1>
        <a href="formbobot.php" class="btn btn-info me-2 mb-2">New Bobot</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Value Bobot</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM bobot";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $data['id_bobot']; ?></td>
                        <td><?php echo $data['id_kriteria']; ?></td>
                        <td><?php echo $data['valuebobot']; ?></td>
                        <td>
                            <a href="viewbobot.php?id_bobot=<?php echo $data['id_bobot']; ?>" class="btn btn-warning me-2">Edit</a>
                            <a href="../action/deletebobot.php?id_bobot=<?php echo $data['id_bobot']; ?>" class="btn btn-danger">Delete</a>
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
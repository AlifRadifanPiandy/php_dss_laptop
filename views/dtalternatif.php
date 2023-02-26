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
    <title>Alternatif</title>
</head>

<body>
    <div class="m-md-4">
        <h1>Data Alternatif</h1>
        <a href="formalternatif.php" class="btn btn-info me-2 mb-2">New Alternatif</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../config.php";
                $sql = "SELECT * FROM alternatif";
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td scope="row"><?php echo $data['idalternatif'] ?></td>
                        <td><?php echo $data['nmalternatif'] ?></td>
                        <td>
                            <a href="viewalternatif.php?idalternatif=<?php echo $data['idalternatif'] ?>" class="btn btn-warning me-2">Edit</a>
                            <a href="../action/deletealternatif.php?idalternatif=<?php echo $data['idalternatif'] ?>" class="btn btn-danger me-2">Delete</a>
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
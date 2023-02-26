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
    <?php
        include "../config.php";
        $id = $_GET['id_skala'];
        $sql = "SELECT * FROM skala WHERE id_skala = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="m-md-4">
        <form action="../action/editskala.php" method="post">
            <h3>Edit skala</h3>
            <div class="mb-3">
                <label for="id_skala" class="form-label">ID Skala</label>
                <input type="text" class="form-control" id="id_skala" name="id_skala" value="<?php echo $data['id_skala'] ?>"readonly>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Value</label>
                <input type="text" class="form-control" id="value" name="value" value="<?php echo $data['value'] ?>">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data['keterangan'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtskala.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>

</html>
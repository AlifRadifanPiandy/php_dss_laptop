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
    <?php
        include "../config.php";
        $id = $_GET['id_bobot'];
        $sql = "SELECT * FROM bobot WHERE id_bobot = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="m-md-4">
        <form action="../action/editbobot.php" method="post">
            <h3>Edit bobot</h3>
            <div class="mb-3">
                <label for="id_bobot">ID Bobot</label>
                <input type="text" class="form-control" id="id_bobot" name="id_bobot" value="<?php echo $data['id_bobot']; ?>"readonly>
            </div>
            <div class="mb-3">
                <label for="id_kriteria" class="form-label">ID Kriteria</label>
                <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" value="<?php echo $data['id_kriteria']; ?>"readonly>
            </div>
            <div class="mb-3">
                <label for="valuebobot" class="form-label">Value Bobot</label>
                <input type="text" class="form-control" id="valuebobot" name="valuebobot" value="<?php echo $data['valuebobot']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtbobot.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>

</html>
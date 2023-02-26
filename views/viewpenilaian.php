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
    <?php
        include "../config.php";
        $id = $_GET['id_nilai'];
        $sql = "SELECT * FROM penilaian WHERE id_nilai = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="m-md-4">
        <form action="../action/editpenilaian.php" method="post">
            <h3>Edit Penilaian</h3>
            <div class="mb-3">
                <label for="id_nilai" class="form-label">ID Nilai</label>
                <input type="text" class="form-control" id="id_nilai" name="id_nilai" value="<?php echo $data['id_nilai'] ?>"readonly>
            </div>
            <div class="mb-3">
                <label for="idalternatif" class="form-label">ID Alternatif</label>
                <input type="text" class="form-control" id="idalternatif" name="idalternatif" value="<?php echo $data['idalternatif'] ?>">
            </div>
            <div class="mb-3">
                <label for="id_bobot" class="form-label">ID Bobot</label>
                <input type="text" class="form-control" id="id_bobot" name="id_bobot" value="<?php echo $data['id_bobot'] ?>">
            </div>
            <div class="mb-3">
                <label for="id_skala" class="form-label">Skala</label>
                <input type="text" class="form-control" id="id_skala" name="id_skala" value="<?php echo $data['id_skala'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtpenilaian.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>

</html>
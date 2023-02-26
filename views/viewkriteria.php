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
    <?php
        include "../config.php";
        $id = $_GET['id_kriteria'];
        $sql = "SELECT * FROM kriteria WHERE id_kriteria = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="m-md-4">
        <form action="../action/editkriteria.php" method="post">
            <h3>Edit Kriteria</h3>
            <div class="mb-3">
                <label for="id_kriteria" class="form-label">ID Kriteria</label>
                <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" value="<?php echo $data['id_kriteria'] ?>"readonly>
            </div>
            <div class="mb-3">
                <label for="nm_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" id="nm_kriteria" name="nm_kriteria" value="<?php echo $data['nm_kriteria'] ?>">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <select class="form-select" id="jenis" name="jenis">
                    <option value="Benefit" <?php if ($data['jenis'] == 'Benefit') echo 'selected' ?>>Benefit</option>
                    <option value="Cost" <?php if ($data['jenis'] == 'Cost') echo 'selected' ?>>Cost</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtkriteria.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>

</html>
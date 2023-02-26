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
        <form action="../action/insertpenilaian.php" method="post">
            <h3>Input Penilaian</h3>
            <div class="mb-3">
                <label for="id_nilai" class="form-label">ID Nilai</label>
                <input type="text" class="form-control" id="id_nilai" name="id_nilai">
            </div>
            <div class="mb-3">
                <label for="idalternatif" class="form-label">ID Alternatif</label>
                <select class="form-select" aria-label="Default select example" name="idalternatif">
                    <option selected>Pilih ID Alternatif</option>
                    <?php
                        include "../config.php";
                        $sql = "SELECT * FROM alternatif";
                        $query = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <option value="<?php echo $data['idalternatif'] ?>"><?php echo $data['idalternatif'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_bobot" class="form-label">ID Bobot</label>
                <select class="form-select" aria-label="Default select example" name="id_bobot">
                    <option selected>Pilih ID Bobot</option>
                    <?php
                        include "../config.php";
                        $sql = "SELECT * FROM bobot";
                        $query = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <option value="<?php echo $data['id_bobot'] ?>"><?php echo $data['id_bobot'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_skala" class="form-label">ID Skala</label>
                <select class="form-select" aria-label="Default select example" name="id_skala">
                    <option selected>Pilih ID Skala</option>
                    <?php
                        include "../config.php";
                        $sql = "SELECT * FROM skala";
                        $query = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <option value="<?php echo $data['id_skala'] ?>"><?php echo $data['id_skala'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtpenilaian.php" class="btn btn-secondary me-2"> Cancel </a>
        </form>
    </div>
</body>
</html>
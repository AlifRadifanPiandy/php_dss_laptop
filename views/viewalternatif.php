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
    <?php
        include "../config.php";
        $id = $_GET['idalternatif'];
        $sql = "SELECT * FROM alternatif WHERE idalternatif = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query);
    ?>
    <div class="m-md-4">
        <form action="../action/editalternatif.php" method="post">
            <h3>Edit Alternatif</h3>
            <div class="mb-3">
                <label for="idalternatif">ID Alternatif</label>
                <input type="text" class="form-control" id="idalternatif" name="idalternatif" value="<?php echo $data['idalternatif'] ?>"readonly>
            </div>
            <div class="mb-3">
                <label for="nmalternatif">Nama Laptop</label>
                <input type="text" class="form-control" id="nmalternatif" name="nmalternatif" value="<?php echo $data['nmalternatif'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtalternatif.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>

</html>
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
        <form action="../action/insertkriteria.php" method="post">
            <h3>Input Kriteria</h3>
            <div class="mb-3">
                <label for="id_kriteria">ID Kriteria</label>
                <input type="text" class="form-control" id="id_kriteria" name="id_kriteria">
            </div>
            <div class="mb-3">
                <label for="nm_kriteria">Nama Kriteria</label>
                <input type="text" class="form-control" id="nm_kriteria" name="nm_kriteria">
            </div>
            <div class="mb-3">
                <label for="jenis">Jenis</label>
                <select class="form-select" id="jenis" name="jenis">
                    <option value="Benefit">Benefit</option>
                    <option value="Cost">Cost</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtkriteria.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>
</html>
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
        <form action="../action/insertalternatif.php" method="post">
            <h3>Input Alternatif</h3>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID Alternatif</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="idalternatif">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Laptop</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nmalternatif">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="dtalternatif.php" class="btn btn-secondary me-2">Cancel</a>
        </form>
    </div>
</body>

</html>
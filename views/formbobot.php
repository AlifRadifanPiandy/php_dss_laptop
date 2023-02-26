<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Bobot</title>
</head>

<body>
  <div class="m-md-4">
    <form action="../action/insertbobot.php" method="post">
      <h3>Input Bobot</h3>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ID Bobot</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="id_bobot">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ID Kriteria</label>
        <select class="form-select" aria-label="Default select example" name="id_kriteria">
          <option selected>Pilih Kriteria</option>
          <?php
          include "../config.php";
          $sql = "SELECT * FROM kriteria";
          $query = mysqli_query($koneksi, $sql);
          while ($data = mysqli_fetch_array($query)) {
            echo "<option value='$data[id_kriteria]'>$data[id_kriteria]</option>";
          }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Value Bobot</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="valuebobot">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="dtbobot.php" class="btn btn-secondary me-2">Cancel</a>
    </form>
  </div>
</body>

</html>
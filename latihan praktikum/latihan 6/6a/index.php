<?php
/*
    Farriz Brilliant Wichaksana
    203040177
    Jumat,13.00
*/
?>

<?php
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6a</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>

  <div class="container mt-3">
    <h1>NOVEL</h1>
    <a href="php/login.php">
      <button type="">Masuk ke Halaman Admin</button>
    </a>
    <div class="card" style="width: 150px">
      <div class="card-body">
        <div class="row">
          <div class="col md-6">
            <?php foreach ($books as $row) : ?>
              <p class="judul">
                <a href="php/detail.php?id=<?= $row['id'] ?>">
                  <img src="assets/gambar/<?= $row["gambar"]; ?>">
                </a>
              </p>
            <?php endforeach;  ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
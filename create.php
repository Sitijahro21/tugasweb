<?php session_start();
  if(isset($_POST['submit'])){
    require 'config.php';
      $insertOneResult = $collection->insertOne([
        'title' => $_POST['title'],
        'penulis' => $_POST['penulis'],
        'harga' => $_POST['harga'],
        'kuanttas' => $_POST['kuantitas'],
        'tahun_terbit' => $_POST['tahun_terbit'],
        'genre' => $_POST['genre'],
        'penerbit' => $_POST['penerbit'],
      ]);
      echo  "<script> 
              alert('Data Pesanan berhasil ditambahkan!');
              document.location.href = 'index.php';
            </script>";
   }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi buku</title>
  <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<!-- Style -->
<style> 
  .bl{
    padding: 10px;
  }
  .container{
    width: 100%;
    margin-top: 2%;
    box-shadow: 0 3px 10px rgba(0,0,0,0.7);
    padding: 5%;
    
  }
  h3 {
    font-family: Cheeky Rabbit;
    font-weight: bold;
    color: #534D9D;
    font-size: 40px;
  }
  table{
    background-color: #97B4D6;
    font-family: Tekton Pro;
  }
</style>
<body>
  <div class="container col-md-8">
  <div class="row justify-content-center">
    <div class="col">
      <h3 class="text-center mb-4">Create Data</h3>
      <form method="POST">
        <table class="table table-hover">
          <div class="container2">
            <tr>
              <td for="title">title</td>
              <td><input type="text" class="form-control" name="title" required="required"></td>
            </tr>
             
            <tr>
              <td for="penulis">penulis</td>
              <td><input type="text" class="form-control" name="penulis" required="required"></td>
            </tr>
             
             <tr>
              <td for="harga">harga</td>
              <td><input type="text" class="form-control" name="harga" required="required"></td>
            </tr>
             
            <tr>
              <td for="kuantitas">kuantitas</td>
              <td><input type="text" class="form-control" name="kuantitas" required="required"></td>
            </tr>

            <tr>
              <td for="tahun_terbit">tahun_terbit</td>
              <td><input type="text" class="form-control" name="tahun_terbit" required="required"></td>
            </tr>
             
            <tr>
              <td for="genre">genre</td>
              <td><input type="text" class="form-control" name="genre" required="required"></td>
            </tr>

            <tr>
              <td for="penerbit">penerbit</td>
              <td><input type="text" class="form-control" name="penerbit" required="required"></td>
            </tr>
          </div>
        </table> 
        <div align="right">
          <button type="submit" name="submit" class="btn btn-primary bi bi-check-circle" style="font-family: Tekton Pro"> Submit </button>
          <a href="index.php" class="btn btn-danger bi bi-arrow-right-circle" style="font-family: Tekton Pro"> Cancel </a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
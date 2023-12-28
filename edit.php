<?php
session_start();
require 'config.php';

if (isset($_GET['id'])) {
    $rest = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}

if (isset($_POST['submit'])) {
    $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
        ['$set' => [
            'title' => $_POST['title'],
            'penulis' => $_POST['penulis'],
            'harga' => $_POST['harga'],
            'kuantitas' => $_POST['kuantitas'],
            'tahun_terbit' => $_POST['tahun_terbit'],
            'genre' => $_POST['genre'],
            'penerbit' => $_POST['penerbit'],
        ]]
    );
    echo "<script> 
              alert('Data Pesanan berhasil diupdate!');
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
    .bl {
        padding: 10px;
    }

    .container {
        width: 100%;
        margin-top: 2%;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.7);
        padding: 5%;
    }

    h3 {
        font-family: Cheeky Rabbit;
        font-weight: bold;
        color: #534D9D;
        font-size: 40px;
    }

    table {
        background-color: #97B4D6;
        font-family: Tekton Pro;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h3 class="text-center">Edit Data</h3>
                <form method="POST">
                    <table class="table table-hover">
                        <div class="container2">
                            <tr>
                                <td for="title">title</td>
                                <td><input type="text" class="form-control" name="title" value="<?php echo "$rest->title"; ?>"></td>
                            </tr>

                            <tr>
                                <td>penulis</td>
                                <td><input type="text" class="form-control" name="penulis" value="<?php echo "$rest->penulis"; ?>"></td>
                            </tr>

                            <tr>
                                <td>harga</td>
                                <td><input type="text" class="form-control" name="harga" value="<?php echo "$rest->harga"; ?>"></td>
                            </tr>

                            <tr>
                                <td>kuantitas</td>
                                <td><input type="text" class="form-control" name="kuantitas" value="<?php echo "$rest->kuantitas"; ?>"></td>
                            </tr>

                            <tr>
                                <td>tahun_terbit</td>
                                <td><input type="text" class="form-control" name="tahun_terbit" value="<?php echo "$rest->tahun_terbit"; ?>"></td>
                            </tr>

                            <tr>
                                <td>genre</td>
                                <td><input type="text" class="form-control" name="genre" value="<?php echo "$rest->genre"; ?>"></td>
                            </tr>

                            <tr>
                                <td>penerbit</td>
                                <td><input type="text" class="form-control" name="penerbit" value="<?php echo "$rest->penerbit"; ?>"></td>
                            </tr>
                        </div>
                    </table>
                    <div align="right">
                        <button type="submit" name="submit" class="btn btn-primary bi bi-check-circle"> Submit </button>
                        <a href="index.php" class="btn btn-danger bi bi-arrow-right-circle"> Cancel </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

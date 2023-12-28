<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Buku</title>
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
	table {
		font-family: Tekton Pro;
		text-align: center;
	}
	h3 {
		font-family: Cheeky Rabbit;
		font-weight: bold;
		color: #534D9D;
		font-size: 40px;
	}
</style>
<body>
	<div class="container col-md-8">
	<div class="row justify-content-center">
		<div class="col">
			<img src="img/logo.png" width="150" class="mb-5">
			<h3 class="text-center">Data pembelian buku</h3>
			<br/>

			<div class="table-responsive">
				<table border="1" class="table table-hover table-bordered">
					<thead>
						<tr class="text-center" style="background-color: #3498db">
							<th>title</th>
							<th>penulis</th>
							<th>harga</th>
							<th>kuantitas</th>
							<th>tahun_terbit</th>
							<th>genre</th>
                            <th>penerbit</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php
                    require 'config.php';
                    $buku = $collection->find();

                    foreach ($buku as $rest) {
                        echo "<tr class='text-center' style='background-color: #D7D4CD'>";
                        echo "<th>".$rest->title."</th>";
                        echo "<td>".$rest->penulis."</td>";
                        echo "<td>".$rest->harga."</td>";
                        echo "<td>".$rest->kuantitas."</td>";
                        echo "<td>".$rest->tahun_terbit."</td>";
                        echo "<td>".$rest->genre."</td>";
                        echo "<td>".$rest->penerbit."</td>";
                        echo "<td>"; // Tambahkan kolom untuk tombol "Update"
                        echo "<a href ='edit.php?id=".$rest->_id."' class='btn btn-warning bi bi-pen' onclick=\"return confirm('Yakin Data Akan DiUpdate ?');\"> Update </a>";
                        echo "</td>";
                        echo "<td>"; // Tambahkan kolom untuk tombol "Remove"
                        echo "<a href ='delete.php?id=".$rest->_id."' class='btn btn-danger bi bi-eraser' onclick=\"return confirm('Yakin Data Akan Dihapus ?');\"> Remove </a>";
                        echo "</td>";
                        echo "</tr>";
                    }

				    ?>
				</table>
				<a href="create.php" class="btn btn-primary bi bi-patch-plus" style="font-family: Tekton Pro">tambah data </a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
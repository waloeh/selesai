<?php 
$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');

$data = mysqli_query($conn, "SELECT kategori.nama, buku.name, buku.stock, buku.gambar, buku.description FROM buku INNER JOIN kategori ON buku.id_category = kategori.id_category");
// $rows = [];
// while ($row = mysqli_fetch_assoc($data) ) {
// 	$rows[] = $row;
// }

$result = mysqli_query($conn, "SELECT kategori.nama, buku.name, buku.stock, kategori.id_category FROM kategori INNER JOIN buku ON kategori.id_category = buku.id_category WHERE buku.id_category=1");

$detail = mysqli_query($conn, "SELECT kategori.nama, buku.name, buku.stock, buku.gambar, buku.description FROM buku INNER JOIN kategori ON buku.id_category = kategori.id_category WHERE buku.id='1'");
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Bagia A</h1>
	<h2>Tampilkan semua buku</h2>
	<table border="1">
		<tr align="center">
			<th>No</th>
			<th>Nama buku</th>
			<th>Kategori buku</th>
			<th>Stok</th>
			<th>Gambar</th>
			<th>Deskripsi</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($data as $da) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $da['name']; ?></td>
				<td><?php echo $da['nama']; ?></td>
				<td><?php echo $da['stock']; ?></td>
				<td>
					<img width="50" src="<?php echo $da['gambar']; ?>">
				</td>
				<td><?php echo $da['description']; ?></td>
			</tr>
		<?php
		$i++; } ?> 
	</table>
	<h2>Tampilkan buku perkategori</h2>
	<table border="1">
		<tr align="center">
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Nama buku</th>
			<th>Stok</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($result as $res) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $res['nama']; ?></td>
				<td><?php echo $res['name']; ?></td>
				<td><?php echo $res['stock']; ?></td>
			</tr>
		<?php
		$i++; } ?> 
	</table>
	<h2>Tampilkan detail buku berdasarkan id </h2>
	<table border="1">
		<tr align="center">
			<th>No</th>
			<th>Nama Buku</th>
			<th>Kategori buku</th>
			<th>Stok buku</th>
			<th>Gambar</th>
			<th>Deskripsi</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($detail as $det) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $det['name']; ?></td>
				<td><?php echo $det['nama']; ?></td>
				<td><?php echo $det['stock']; ?></td>
				<td>
					<img width="50" src="<?php echo $det['gambar']; ?>">
				</td>
				<td><?php echo $det['description']; ?></td>
			</tr>
		<?php
		$i++; } ?> 
	</table>
</body>
</html>
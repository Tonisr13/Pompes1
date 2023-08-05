<?php

	include 'connection.php';

	$nama = $_POST['username'];
	$nomor = $_POST['telephone'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];
	
	$query = "INSERT INTO pengguna (username, telephone, alamat, jabatan) values ('$nama', '$nomor', '$alamat', '$jabatan')";

	$result = mysqli_query($connection, $query);

	if($result) {
		header('location:admin.php');
	}

?>
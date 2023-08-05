<?php

	include 'connection.php';

	$id = $_POST['id'];
	$username = $_POST['username'];
	$telephone = $_POST['telephone'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];


	$query = "UPDATE pengguna SET username = '$username', telephone = '$telephone', alamat = '$alamat', jabatan = '$jabatan' where id = $id";

	$result = mysqli_query($connection, $query);

	if($result) {
		header('location:admin.php');
	}else{
		die("Update Gagal". mysqli_error($result)); 
	}

?>
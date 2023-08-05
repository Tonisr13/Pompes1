<?php

	include 'connection.php';

	$id = $_POST['id'];

	$query = "DELETE FROM pengguna WHERE id = '$id'";

	$result = mysqli_query($connection, $query);

	if($result) {
		header('location:admin.php');
	} else {
	echo "Data gagal dihapus";
	}

?>
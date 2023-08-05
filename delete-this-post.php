<?php
include 'connection.php';

		$id = $_GET['id'];

		$result = mysqli_query ($connection,"DELETE FROM articles WHERE id = $id");

		if( mysqli_affected_rows($connection) > 0 ){
			echo "<script>
						alert('Berhasil di hapus')
						document.location.href= 'post-list.php'
					</script>";
			}else{
				echo "<script>
						alert('Gagal di hapus')
						document.location.href= 'nganu.php'
					</script>";
			}





?>
<?php
define('localhost');
define('fuua');
define('zzz');
define('frontpage');
$connection = mysqli_connect(localhost,fuua,zzz,frontpage);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php 
$koneksi = mysqli_connect("localhost", "masykur", "masykurw", "daftarhadir");

if (mysqli_connect_errno()) {
	echo "koneksi gagal " . mysql_connect_error();
}
 ?>
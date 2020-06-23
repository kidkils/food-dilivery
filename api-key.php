<?php 
	$headers = apache_request_headers();

	// foreach ($headers as $header => $value) {
	//     echo "$header: $value <br />\n";
	// }

	$key = $headers['api-key'];
	
	// koneksi ke database
	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mahasiswa";

		$conn = new mysqli($servername, $username, $password, $dbname);
?>
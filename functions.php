<?php 
	//koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "food");

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fecth_assoc($result) ) {
			$rows = $row;
		}

		return $rows;
	}

	function registrasi($data) {
		global $conn;

		$username = strtolower(stripcslashes($data["username"]) );
		$password = mysqli_real_escape_string($conn, $data["password"] );
		$password2 = mysqli_real_escape_string($conn, $data["password2"] );

		//cek username
		$result = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");

		if( mysqli_fetch_assoc($result) ) {
			echo "<script>
					alert('username sudah terdaftar')
				  </script>";

			return false;
		}

		//cek konfirmasi password
		if ( $password !== $password2 ) {
			echo "<script>
					alert('konfirmasi password tidak sesuai!')
			      </script>";

			return false;
		}

		//gabung username dan passord
		$api_key = md5("$username"."$password");

		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambahkan data ke database
		mysqli_query($conn, "INSERT INTO login VALUES('', '$username', '$password', '$api_key')");

		return mysqli_affected_rows($conn);
	}

	function ambil_api_key($username, $konek) {
		$sql = "SELECT api_key FROM login WHERE username='$username'";
		$result = $konek->query($sql);
		$token = $result->fetch_assoc();
		return $token['api_key'];
	}

 ?>
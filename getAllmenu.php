<?php 
	
	$headers = apache_request_headers();

	// foreach ($headers as $header => $value) {
	//     echo "$header: $value <br />\n";
	// }
	if(!isset($headers["api-key"]) ) {
		echo "header anda tidak ada";	
	}else {
		$key = $headers['api-key'];

		// connect to database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "food";

		$conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT * FROM login WHERE api_key='$key'";

		$hasil = $conn->query($sql);
		$result = $hasil->fetch_all(MYSQLI_ASSOC);

		// api key condition check
		if(count($result) > 0) {

			header("Content-type:application/json");

			$result = array();

			function status($kode, $deskripsi){
				$result['status']['code'] = $kode;
				$result['status']['description'] = $deskripsi;
				return $result;
			}

			$method = $_SERVER["REQUEST_METHOD"];

				if($method=='GET'){
					$result = status(200, 'Request OK');

					if(isset($_GET['id_menu'])){
						$sql = "SELECT * FROM menu WHERE nama=$_GET[id_menu]";
					}else{
						$sql = "SELECT * FROM menu";
					}

					$hasil = $conn->query($sql);

					$result['results'] = $hasil->fetch_all(MYSQLI_ASSOC);

				}else{
					$result = status(404, 'Bad Method Request');
				} 

				echo json_encode($result);
		}else{
			echo "api key tidak ada";
		}
	
	}

	
 ?>
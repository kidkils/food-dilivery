<?php 

	session_start();

	if( !isset($_SESSION["nama_user"]) ) {
		header("Location: login.php");
		exit;
	}

    require 'functions.php';

    $token = ambil_api_key($_SESSION["nama_user"], $conn);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Api Documentation - Food Dilivery</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">REKAYASA WEB</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">API DOCUMENTATION</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">FOOD DILIVERY</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="pre-wrap masthead-subheading font-weight-light mb-0" id="username" name="username">Api-key : <?php echo $token; ?></p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">API DOCUMENTATION</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Items-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/kategori2.jpg" alt="Log Cabin"/>
                        </div>
                        <h3 class="text-center" style="font-weight: bold;">kategori</h3>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/menu.jpg" alt="Tasty Cake"/>
                        </div>
                        <h3 class="text-center" style="font-weight: bold;">Menu</h3>
                    </div>
                  <!--   <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/circus.png" alt="Circus Tent"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/game.png" alt="Controller"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/safe.png" alt="Locked Safe"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="Submarine"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/img/image.svg" alt="New Image"/>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Portfolio Modal-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Kategori</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <h3 style="text-align: left;">Penjelasan</h3>
                                    <p class="mb-5" style="text-align: left;">Method "Kategori" adalah method yang digunakan untuk mendapatkan daftar menu berdasarkan kategori menu yang disiapkan. kategori menu ini dibagi menjadi "Pizza", "Nasi", dan "Minuman"</p>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="Log Cabin"/> -->
                                    <div class="card border-info text-center mb-5" style="border-radius: unset;">
                                      <div class="ro-docs-tabs">
                                        <ul class="nav nav-tabs ro-docs-tabs">
                                          <li class="nav-item">
                                            <a class="nav-link active" href="#menu1" data-toggle="tab" style="border-radius: unset;">URL</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#menu2" data-toggle="tab" style="border-radius: unset;">Parameter</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#menu3" data-toggle="tab" style="border-radius: unset;">Contoh Request</a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="tab-content">
                                        <div role="tabpanel" id="menu1" class="tab-pane fade in active">
                                            <table class="table table-hoever table-sm">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Method</th>
                                                        <th>URL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>GET</td>
                                                        <td>http://localhost/freelancer/getKategori.php?kategori=nasi</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" id="menu2" class="tab-pane fade">
                                            <table class="table table-hoever table-sm">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Method</th>
                                                        <th>Parameter</th>
                                                        <th>Wajib</th>
                                                        <th>Tipe</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>GET/HEAD</td>
                                                        <td>Key</td>
                                                        <td>Ya</td>
                                                        <td>String</td>
                                                        <td>API key</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GET</td>
                                                        <td>Kategori</td>
                                                        <td>Ya</td>
                                                        <td>String</td>
                                                        <td>Pizza/Makanan/Minuman</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" id="menu3" class="tab-pane fade">
                                            <div class="navbar navbar-light bg-light">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#shell1" data-toggle="tab"
                                                                style="/*padding-top: 8px; 
                                                                       padding-bottom: 8px; 
                                                                       padding-left: 5px; 
                                                                       padding-right: 30px;*/
                                                                       border-radius: unset;"
                                                            >Shell</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#php1" data-toggle="tab"
                                                                style="/*padding-right: 30px;*/
                                                                       border-radius: unset;">Php</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#Java" data-toggle="tab"
                                                                style="/*padding-right: 30px;*/
                                                                       border-radius: unset;">Java</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div role="tabpanel" id="shell1" class="tab-pane fade in active">
                                                    <pre style="text-align: left;">

    curl --request GET \
         --url 'http://localhost/freelancer/getKategori.php?kategori=nasi' \
         --header 'api-key: your-api-key'                                                     
                                                    </pre>
                                                </div>
                                                <div role="tabpanel" id="php1" class="tab-pane fade">
                                                    <pre style="text-align: left;">

   &lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost/freelancer/getKategori.php?kategori=nasi",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "api-key: your-api-key"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
                                                    </pre>
                                                </div>
                                                <div role="tabpanel" id="Java" class="tab-pane fade">
                                                    <pre style="text-align: left;">

    OkHttpClient client = new OkHttpClient();

    Request request = new Request.Builder()
      .url("http://localhost/freelancer/getKategori.php?kategori=nasi")
      .get()
      .addHeader("api-key", "your-api-key")
      .build();

    Response response = client.newCall(request).execute();

                                                    </pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <h3 style="text-align: left;">Response</h3>
                                    <div class="card border-info text-center mb-5" style="border-radius: unset;">
                                      <div class="ro-docs-tabs">
                                        <ul class="nav nav-tabs ro-docs-tabs">
                                          <li class="nav-item">
                                            <a class="nav-link active" href="#Response1" data-toggle="tab" style="border-radius: unset;">Response Sukses</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#Response2" data-toggle="tab" style="border-radius: unset;">Response Gagal</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#Response3" data-toggle="tab" style="border-radius: unset;">Penjelasan Response</a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="tab-content">
                                        <div role="tabpanel" id="Response1" class="tab-pane fade in active">
                                            <pre class="lang:json decode:true" style="text-align: left;">

    {
        "status": {
            "code": 200,
            "description": "Request OK"
        },
        "results": [
            {
                "id_menu": "8",
                "nama": "Meatballs Beef Mushroom",
                "deskripsi": "Bola daging sapi dengan saus daging sapi cincang dan jamur.",
                "kategori": "nasi",
                "harga": "40000",
                "gambar": "meatballs-beef-mushroom.jpg"
            },
            {
                "id_menu": "9",
                "nama": "Black Pepper Chicken",
                "deskripsi": "Ayam dengan saus lada hitam.",
                "kategori": "nasi",
                "harga": "40000",
                "gambar": "black-pepper-chicken.jpg"
            },
            {
                "id_menu": "10",
                "nama": "Oriental Chicken",
                "deskripsi": "aging ayam berpadu dengan saus oriental.",
                "kategori": "nasi",
                "harga": "40000",
                "gambar": "oriental-chicken.jpg"
            }
        ]
    }
                                            </pre>
                                        </div>
                                        <div role="tabpanel" id="Response2" class="tab-pane fade">
                                            <pre class="lang:json decode:true" style="text-align: left;">

    {
        "status": {
            "code": 404,
            "description": "Bad Method Request"
        }
    }
                                            </pre>
                                        </div>
                                        <div role="tabpanel" id="Response3" class="tab-pane fade">
                                            <table class="table table-hoever table-sm">
                                                <thead class="thead-dark" style="text-align: left;">
                                                    <tr>
                                                        <th>Komponen</th>
                                                        <th>Tipe</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: left;">
                                                    <tr>
                                                        <td>code</td>
                                                        <td>Int</td>
                                                        <td>Code status response</td>
                                                    </tr>
                                                    <tr>
                                                        <td>description</td>
                                                        <td>String</td>
                                                        <td>Penjelesan code status</td>
                                                    </tr>
                                                    <tr>
                                                        <td>id_menu</td>
                                                        <td>Int</td>
                                                        <td>Identitas id untuk menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>nama</td>
                                                        <td>String</td>
                                                        <td>Nama menu makanan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>deskripsi</td>
                                                        <td>String</td>
                                                        <td>Penjelesan dari menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>kategori</td>
                                                        <td>String</td>
                                                        <td>pembagian jenis menu</td>
                                                    </tr>
                                                     <tr>
                                                        <td>harga</td>
                                                        <td>Int</td>
                                                        <td>Harga menu</td>
                                                    </tr>
                                                     <tr>
                                                        <td>gambar</td>
                                                        <td>String</td>
                                                        <td>Tampilan gambar setiap menu</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Menu</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <h3 style="text-align: left;">Penjelasan</h3>
                                    <p class="mb-5" style="text-align: left;">Method "Menu" adalah method yang digunakan untuk mendapatkan semua daftar menu yang terdapat dalam database.</p>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="Log Cabin"/> -->
                                    <div class="card border-info text-center mb-5" style="border-radius: unset;">
                                        <div class="ro-docs-tabs">
                                            <ul class="nav nav-tabs ro-docs-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#menu4" data-toggle="tab" style="border-radius: unset;">URL</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#menu5" data-toggle="tab" style="border-radius: unset;">Parameter</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#menu6" data-toggle="tab" style="border-radius: unset;">Contoh Request</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div role="tabpanel" id="menu4" class="tab-pane fade in active">
                                                <table class="table table-hoever table-sm">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Method</th>
                                                            <th>URL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>GET</td>
                                                            <td>http://localhost/freelancer/getAllmenu.php</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div role="tabpanel" id="menu5" class="tab-pane fade">
                                                <table class="table table-hoever table-sm">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Method</th>
                                                            <th>Parameter</th>
                                                            <th>Wajib</th>
                                                            <th>Tipe</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>GET/HEAD</td>
                                                            <td>Key</td>
                                                            <td>Ya</td>
                                                            <td>String</td>
                                                            <td>API key</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div role="tabpanel" id="menu6" class="tab-pane fade">
                                                <div class="navbar navbar-light bg-light">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item active">
                                                            <a class="nav-link" href="#shell" data-toggle="tab"
                                                                style="/*padding-top: 8px; 
                                                                       padding-bottom: 8px; 
                                                                       padding-left: 5px; 
                                                                       padding-right: 30px;*/
                                                                       border-radius: unset;"
                                                            >Shell</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#php" data-toggle="tab"
                                                                style="/*padding-right: 30px;*/
                                                                       border-radius: unset;">Php</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#java1" data-toggle="tab"
                                                                style="/*padding-right: 30px;*/
                                                                       border-radius: unset;">Java</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div role="tabpanel" id="shell" class="tab-pane fade in active">
                                                        <pre style="text-align: left;">

    curl --request GET \
         --url 'http://localhost/freelancer/getAllmenu.php' \
         --header 'api-key: your-api-key'                                                     
                                                        </pre>
                                                    </div>
                                                    <div role="tabpanel" id="php" class="tab-pane fade">
                                                        <pre style="text-align: left;">

   &lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost/freelancer/getAllmenu.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "api-key: your-api-key"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
                                                        </pre>
                                                    </div>
                                                    <div role="tabpanel" id="java1" class="tab-pane fade">
                                                        <pre style="text-align: left;">

    OkHttpClient client = new OkHttpClient();

    Request request = new Request.Builder()
      .url("http://localhost/freelancer/getAllmenu.php")
      .get()
      .addHeader("api-key", "your-api-key")
      .build();

    Response response = client.newCall(request).execute();

                                                        </pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 style="text-align: left;">Response</h3>
                                    <div class="card border-info text-center mb-5" style="border-radius: unset;">
                                      <div class="ro-docs-tabs">
                                        <ul class="nav nav-tabs ro-docs-tabs">
                                          <li class="nav-item">
                                            <a class="nav-link active" href="#Response4" data-toggle="tab" style="border-radius: unset;">Response Sukses</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#Response5" data-toggle="tab" style="border-radius: unset;">Response Gagal</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#Response6" data-toggle="tab" style="border-radius: unset;">Penjelasan Response</a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="tab-content">
                                        <div role="tabpanel" id="Response4" class="tab-pane fade in active">
                                           <pre class="lang:json decode:true" style="text-align: left;">
    {
        "status": {
            "code": 200,
            "description": "Request OK"
        },
        "result": [
            {
                "id_menu": "1",
                "nama": "Meat Lover",
                "deskripsi": "Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.",
                "kategori": "pizza",
                "harga": "49500",
                "gambar": "meat-lover.jpg"
            }
        ]
    }                                   
                                           </pre>
                                        </div>
                                        <div role="tabpanel" id="Response5" class="tab-pane fade">
                                            <pre class="lang:json decode:true" style="text-align: left;">

    {
        "status": {
            "code": 404,
            "description": "Bad Method Request"
        }
    }
                                            </pre>
                                        </div>
                                        <div role="tabpanel" id="Response6" class="tab-pane fade">
                                            <table class="table table-hoever table-sm">
                                                <thead class="thead-dark" style="text-align: left;">
                                                    <tr>
                                                        <th>Komponen</th>
                                                        <th>Tipe</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: left;">
                                                    <tr>
                                                        <td>code</td>
                                                        <td>Int</td>
                                                        <td>Code status response</td>
                                                    </tr>
                                                    <tr>
                                                        <td>description</td>
                                                        <td>String</td>
                                                        <td>Penjelesan code status</td>
                                                    </tr>
                                                    <tr>
                                                        <td>id_menu</td>
                                                        <td>Int</td>
                                                        <td>Identitas id untuk menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>nama</td>
                                                        <td>String</td>
                                                        <td>Nama menu makanan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>deskripsi</td>
                                                        <td>String</td>
                                                        <td>Penjelesan dari menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>kategori</td>
                                                        <td>String</td>
                                                        <td>pembagian jenis menu</td>
                                                    </tr>
                                                     <tr>
                                                        <td>harga</td>
                                                        <td>Int</td>
                                                        <td>Harga menu</td>
                                                    </tr>
                                                     <tr>
                                                        <td>gambar</td>
                                                        <td>String</td>
                                                        <td>Tampilan gambar setiap menu</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="Circus Tent"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="Controller"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="Locked Safe"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="Submarine"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">New Image</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/image.svg" alt="New Image"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">New Image Description</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-white">ABOUT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="pre-wrap lead" style="text-align: justify;">Food Dilevery merupakan sebuah situs dan web service (API) yang menyediakan informasi berbagai menu makanan seperti seperti mulai dari nama menu, kategori menu, harga, keterangan menu, dan foto dari menu itu sendiri. 
                        </p>
                    </div>
                    <div class="col-lg-4 mr-auto" style="text-align: justify;">
                        <p class="pre-wrap lead">Food Dilivery ditujukan kepada pengguna yang ingin mengembangkan sebuah aplikasi untuk sebuah toko makanan online, ataupun bagi orang yang ingin belajar mengenai penggunaan api menu makanan.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">0822-3906-9199</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:kidkils5@gmail.com">kidkils5@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">LOCATION</h4>
                        <p class="pre-wrap lead mb-0"> Jl. Perintis Kemerdekaan KM. 10;
Politeknik Negeri Ujung Pandang</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">AROUND THE WEB</h4><a class="btn btn-outline-light btn-social mx-1" href="https://web.facebook.com/agus.purnawan.39904"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/sbootstrap"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/startbootstrap"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.dribble.com/startbootstrap"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">ABOUT API FOOD DILVERY</h4>
                        <p class="pre-wrap lead mb-0">API Food dilivery, is local API for how to get some menu. </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Copyright © Food Dilivery 2020</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
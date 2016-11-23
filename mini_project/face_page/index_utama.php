<?php session_start();
if(isset($_SESSION['username'])) {
	header('location:index.php'); }
	require_once("koneksi.php");
	?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<!--<![endif]-->
<!-- KEPALA -->
<head>
	<meta charset="utf-8"/>
	<title>sign_in</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!-- GAYA  -->
	<link href='http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- akhir gaya -->

	<!-- gaya tema -->
	<link href="assets/onepage2/css/layout.css" rel="stylesheet" type="text/css"/>
	<!-- tutup gaya tema -->

</head>
<!-- tutup kepala -->

<!-- DOC: Apply "page-on-scroll" kelas untuk elemen body untuk mengatur tata letak tajuk tetap -->
<body class="page-header-fixed">

	<!-- tampilan main -->

	<!-- Header -->
	<header class="page-header">
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">

				<!-- untuk tampilan agar familiar dengan semua perangkat-->
				<a class="navbar-brand" href="#intro">
					<img class="logo-default" src="assets/onepage2/img/coollogo_com-163351554.png" alt="Logo">
					<img class="logo-scroll" src="assets/onepage2/img/coollogo_com-163351554.png" alt="Logo">
				</a>
			</div>

		</nav>
	</header>
	<!-- tutup header -->

	<!-- INTRO SECTION -->
	<section id="intro">
		<div id="carousel-example-generic" class="carousel slide">

			<!-- indikator -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<!-- <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->
				<!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner text-uppercase" role="listbox">
				<!-- First slide -->
				<div class="item carousel-item-one active">
					<div class="container">
						<h3 class="carousel-position-one animate-delay carousel-title-v1" data-animation="animated fadeInDown">
							Program Data Siswa
						</h3>
						<p class="carousel-position-two animate-delay carousel-subtitle-v1" data-animation="animated fadeInDown">
							guna memudahkan untuk<br> editing data siswa
						</p>
						<a href="#" class="carousel-position-three animate-delay btn-brd-white" data-animation="animated fadeInUp">Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END INTRO SECTION -->

	<!-- BEGIN MAIN LAYOUT -->
	<div class="page-content">
		<!-- SUBSCRIBE BEGIN -->
		<div class="subscribe">
			<div class="container">
				<div class="subscribe-wrap">
					<div class="subscribe-body subscribe-desc md-margin-bottom-30">
						<h1>Masuk Untuk Edit</h1>
						<p>masukkan username dan password anda</p>
					</div>
					<div class="subscribe-body">
						<form class="form-wrap input-field" action="proseslogin.php" method="post">
							<div class="form-wrap-group">
								<input type="text"class="form-control" id="name" name="username" placeholder="masukkan nama anda">
							</div>
							<div class="form-wrap-group border-left-transparent">
							<input type="password" class="form-control" id="password" name="password" placeholder="masukkan password anda">
							</div>
							<div class="form-wrap-group">
								<button type="submit" class="btn-danger btn-md btn-block">Masuk</button>

								<button type="reset" class="btn-danger btn-md btn-block">Batal</button>
								<div class="subscribe-body subscribe-desc md-margin-bottom-30">
								<p>Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></p></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<section id="contact">
			<div class="footer-copyright">
				<div class="container">
					<h3>wawan.net</h3>
					<P>Copyright By <a href="#">wawan.net</a></P>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
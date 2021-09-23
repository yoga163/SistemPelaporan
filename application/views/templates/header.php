<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ini.css') ?>">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Lapor Sendangguwo</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<a class="navbar-brand" href="<?= base_url();?>"><span>Lapor </span><span>Sendangguwo</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="<?= base_url();?>">Lapor<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="<?php echo base_url();?>buku">Lihat Laporan</a>
				<!--<a class="nav-item nav-link" href="<?php echo base_url();?>pinjam">Pinjam</a>-->
			</div>
		</div>
	</nav>
<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ini.css')?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Lapor Sendangguwo</title>
	
</head>
<body id="home">
	<!--Navbar--> 
	<nav class="navbar navbar-expand-lg sticky-top navbar-custom navbar-dark">
		<div class="container">
		<a class="navbar-brand page-scroll" href="#home"><img src="<?php echo base_url('/assets/images/logo.png') ?>">Kelurahan Sendangguwo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link page-scroll abc" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll abc " href="#lapor">Lapor</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll abc" href="#tinjau">Tinjau Laporan</a>
				</li>
			</ul>
		</div>
		</div>
	</nav>
	<!--Akhir navbar-->
	<!--Jumbotron-->
	<div class="jumbotron jumbotron-fluid" >
		<div class="container" >
				<h1 class="display-4">Lapor<br>Sendangguwo</h1>
			<!--<img src="<?php echo base_url('/assets/images/lapor.png')?>">-->
			<p class="card-text text-center">Web Untuk Melaporakan Kerusakan Fasilitas Dimasyarakat Kelurahan Sendangguwo</p>
			<a href="#lapor" class="btn btn-primary tombol page-scroll">Lapor Disini</a>
			
		</div>
	</div>
<div class="container-fluid">
	<div class="container d-flex" >
			<div class="row lapor" style="height:100%;">
				<div class="col-lg-6 " >
					<h2 class="text-center gal">Gallery</h2>
					<div class="foto image-fluid">
						<div class="bd-example">
							<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
									<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="<?php echo base_url(); ?>assets/slide/img1.jpg" class="d-block w-100 rounded " alt="...">
										<div class="carousel-caption d-none d-md-block">
											
										</div>
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url(); ?>assets/slide/img2.jpeg" class="d-block w-100 rounded" alt="...">
										<div class="carousel-caption d-none d-md-block">
											
										</div>
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url(); ?>assets/slide/img3.jpeg" class="d-block w-100 rounded" alt="...">
										<div class="carousel-caption d-none d-md-block">
											
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 lapor" id="lapor" style="margin-top:5px;">
					<?php echo form_open_multipart('home/do_tambah2') ?>
						<h3 class="text-center">Lapor</h3>
						<label>Nama</label><br>
						<div class="input-group mb-3">
							<input type="text"  name="nama" id="input" class="form-control" required> 
						</div>
						<label>No. HP</label><br>
						<div class="input-group mb-3">
							<input type="text" name="nohp" class="form-control" require>
						</div>
						<label>Alamat Kerusakan</label><br>
						<div class="input-group mb-3">
							<textarea class="form-control" placeholder="Alamat" name="alamat" require></textarea>
						</div>
					
						<label>Laporan</label><br>
						<div class="input-group mb-3">
							<textarea class="form-control" placeholder="Lapor" name="lapor" require></textarea>
						</div>
						<label>Bukti Foto</label><br>
						<input type="file" name="foto" id="gbr" require>
						<br>
						<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
						<input type="submit" name="kirim" class="btn btn-info tombol" value="Submit">
					</form>
				</div>
			</div>
	</div>
	<div class="container tinjau">
		<div class="row " style="">
			<div class="col-md-12">
				<div id="tinjau" style="margin-top:15px;">
					<h4 class="text-center">Tinjau Laporan</h4>
						<table class="table " id="tb">
							<tr>
								<th>No</th>
								<th>Laporan</th>
								<th>Alamat Kerusakan</th>
								<th>Tanggal</th>
							</tr>
							<?php
							$no = 0; 
							foreach ($lapor as $lapors) :$no++; ?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $lapors['laporan'];?></td>
								<td><?php echo $lapors['alamat'];?></td>
								<td><?php echo $lapors['tgl'];?></td>
							</tr>
							<?php endforeach?>
						</table>
						<p class="page"><?php echo $links; ?></p>
				</div>
			</div>					
		</div>
	</div>
</div>


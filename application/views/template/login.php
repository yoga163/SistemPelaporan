<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ini.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">

</head>
<center>
	
	<br><br>
<body>
<div class="container login">
	<img src="<?php echo base_url();?>/assets/images/logo.png" style="width: 100px; height: 150px; margin-bottom: 10px;">
	<h3>LOGIN ADMIN</h3>
	<h4>Kelurahan Sendangguwo</h4>
	<h5>Sistem Pelaporan Kerusakan Fasilitas</h5>
	<div class="row form justify-content-center">
	
	<div class="col-md-4">
	<?php if ($this->session->flashdata('msg')) { ?>
    <br>
    <div role="alert" class="alert alert-danger">
    <button data-dismiss="alert" class="close" type="button">
        <span aria-hidden="true">x</span></button>
    <?= $this->session->flashdata('msg') ?>
    </div>
    <?php } ?>
		<form action="<?php echo base_url('login/do_login');?>" method="post">
			<div class="form-group">
				<label>Masukan Username</label>
				<input type="text" name="uname" class="form-control"  autofocus>
			</div>
			<div class="form-group">
				<label>Masukan Password</label>
				<input type="password" name="password" class="form-control" >
			</div>
			<input type="submit" name="simpan" value="LOGIN" class="btn btn-info btn-block">
		</form>
	</div>
	
	</div>
</div>
</body>
</center>
</html>
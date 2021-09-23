
<p>
	<?php if ($this->session->flashdata('msg')) {?>
	<div role="alert" class="alert alert-success">
		<button data-dismiss="alert" class="close" type="button">
			<span aria-hidden="true">x</span></button>
		<?= $this->session->flashdata('msg') ?>
		</div>
	<?php }?>
</p>

<div class="row">
<div class="col-dm-6" style="margin-left: 100px;">
	<div class="img">
		<img src="<?php echo base_url(); ?>assets/images/logo.png" class="mr-3" style="width: 200px; height: 300px;">
		
	</div>
</div>

<div class="col-md-6" id="name" >
	<h1>Selamat Datang <?php echo $this->session->userdata('ses_nama');?></h1>
	<p><?php echo var_dump($user);?></p>
	<b>Sistem Pelaporan Sendangguwo</b>
</div>
</div>


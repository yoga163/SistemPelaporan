<h1>TAMBAH LAPORAN</h1>
<br>
<div class="container">
	<?php if ($this->session->flashdata('gagalGbr')) { ?>
    <br>
    <div role="alert" class="alert alert-danger">
    <button data-dismiss="alert" class="close" type="button">
        <span aria-hidden="true">x</span></button>
    <?= $this->session->flashdata('gagalGbr') ?>
    </div>
    <?php } ?>
	<?php if ($this->session->flashdata('gagal')) { ?>
    <br>
    <div role="alert" class="alert alert-danger">
    <button data-dismiss="alert" class="close" type="button">
        <span aria-hidden="true">x</span></button>
    <?= $this->session->flashdata('gagal') ?>
    </div>
    <?php } ?>
	<?php echo form_open_multipart('admin/do_tambah') ?>
	<div class="row">
		<div class="col-8">
			<div class="form-group">
				<label>MASUKAN NAMA</label>
				<input type="text" name="nama" class="form-control bes" required>
			</div>
			<div class="form-group">
				<label>MASUKAN NOHP</label>
				<input type="text" name="nohp" class="form-control " required>
			</div>
			<div class="form-group">
				<label>ALAMAT</label>
				<input type="text" name="alamat" class="form-control bes" required>
			</div>
			<div class="form-group">
				<label>LAPORAN</label>
				<input type="text" name="lapor" class="form-control bes" required>
			</div>
			<div class="form-group">
				<label>MASUKAN FOTO</label>
				<input type="file" name="foto" class="form-control" >
			</div>
			<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
			<input type="submit" name="simpan" value="TAMBAH" class="btn btn-info"> <a href="<?php echo base_url('admin/laporan'); ?>" class="btn btn-primary"> KEMBALI</a>
			</div>
		</div>
	</div>
	</form>
</div>

<h1>EDIT LAPORAN</h1>
<br>
<div class="container">
	<div class="row">
		<div class="col-7">
			<?php echo form_open_multipart('admin/do_edit') ?>

				<div class="form-group">
					<label>MASUKAN NAMA</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $lapor['id_lapor'] ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $lapor['nama'] ?>">
				</div>
				<div class="form-group">
					<label>MASUKAN NO HP</label>
					<input type="text" name="nohp" class="form-control" value="<?php echo $lapor['nohp'] ?>">
				</div>
				<div class="form-group">
					<label>MASUKAN ALAMAT</label>
					<input type="text" name="alamat" class="form-control" value="<?php echo $lapor['alamat'] ?>">
				</div>
				<div class="form-group">
					<label>MASUKAN LAPORAN</label>
					<input type="text" name="laporan" class="form-control" value="<?php echo $lapor['laporan'] ?>">
				</div>
				<div class="form-group">
					<img style="width: 200px" src="<?php echo base_url() ?>assets/foto/<?php echo $lapor['foto'] ?>">
					<label>MASUKAN FOTO</label>
					<input type="file" name="foto" class="form-control" >
				</div>
				<input type="submit" name="simpan" value="SAVE" class="btn btn-info">
				<a href="<?php echo base_url('admin/laporan'); ?>" class="btn btn-primary"> KEMBALI</a>
			</form>
		</div>
	</div>
</div>

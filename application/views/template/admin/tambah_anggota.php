
<div class="container">
<h1>TAMBAH USER</h1>
	<div class="col-6">
		<?php echo form_open_multipart('Admin/do_anggota') ?>

			<div class="form-group">
				<label>MASUKAN NAMA</label>
				<input type="text" name="nama" class="form-control bes">
			</div>
			<div class="form-group">
				<label>USERNAME</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
				<input type="password" class="form-control" name="password"  id="myInput" rows="5"></input>
				<input type="checkbox" onclick="myFunction()">Show Password</input>
			</div>
			<div class="form-group">
				<label>STATUS</label>
				<select class="form-select form-control" name="status">
					<option>-----Pilihan-----</option>
					<option value="1">Admin</option>
					<option value="2">User</option>
				</select>

				
			</div>
			<div class="form-group">
				<label>ALAMAT</label>
				<input type="text" name="alamat" class="form-control bes">
			</div>
			<input type="submit" name="simpan" value="TAMBAH" class="btn btn-info"> <a href="<?php echo base_url('admin/anggota'); ?>" class="btn btn-primary"> KEMBALI</a>
		</form>
		<script>
		function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
				} else {
					x.type = "password";
				}
		}
		</script>
	</div>
</div>

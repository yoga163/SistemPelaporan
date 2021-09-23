<div class="container">
	<h3>UPDATE PASSWORD</h3>
<br>
<hr>
	<p><?php echo $this->session->flashdata('ubah') ?></p>
	<p style="color: red"><?php echo $this->session->flashdata('gagal') ?></p>
	
	 <div class="col-md-5">
	<?php echo form_open_multipart('admin/do_setting') ?>
	
	<div class="form-group">
		<label>MASUKAN PASSWORD LAMA</label>
		<input type="password" name="old" class="form-control" id="myInput" value="<?php echo set_value('old');?>" required>
		<input type="checkbox" onclick="myFunction()">Show Password
		
	</div>
	<br>
	<div class="form-group">
		<label>MASUKAN PASSWORD BARU</label>
		<input type="password" name="psw" id="myInput1" class="form-control" required>
		<input type="checkbox" onclick="myFunction2()">Show Password
		
	</div>
	<div class="form-group">
		<label>ULANGI PASSWORD BARU</label>
		<input type="password" name="psw2" id="myInput2" class="form-control" required>
		<input type="checkbox" onclick="myFunction3()">Show Password
		
		
	</div>
	<input type="submit" name="simpan" value="UBAH" class="btn btn-info">
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
	function myFunction2() {
		var x = document.getElementById("myInput1");
		if (x.type === "password") {
			x.type = "text";
			} else {
				x.type = "password";
			}
	}
	function myFunction3() {
		var x = document.getElementById("myInput2");
		if (x.type === "password") {
			x.type = "text";
			} else {
				x.type = "password";
			}
	}
	</script>
</div>

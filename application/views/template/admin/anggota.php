

<div class="container">
<h2>DAFTAR USER</h2>
	<a href="<?php echo base_url('admin/tambah_anggota') ?>" class="btn btn-info">TAMBAH</a>
<br>
	<p><?php if ($this->session->flashdata('gagal')) { ?>
    
    <div role="alert" class="alert alert-danger">
		<button data-dismiss="alert" class="close" type="button">
			<span aria-hidden="true">x</span></button>
		<?= $this->session->flashdata('gagal') ?>
	</div>
    <?php } ?>
	<?php if ($this->session->flashdata('tambah')) { ?>
	<div role="alert" class="alert alert-success">
		<button data-dismiss="alert" class="close" type="button">
			<span aria-hidden="true">x</span></button>
		<?= $this->session->flashdata('tambah') ?>
	</div>
    <?php } ?>
	<?php if ($this->session->flashdata('hapus')) {?>
	<div role="alert" class="alert alert-success">
		<button data-dismiss="alert" class="close" type="button">
			<span aria-hidden="true">x</span></button>
		<?= $this->session->flashdata('hapus') ?>
		</div>
	<?php }?>
	</p>
	<table class="table table-border">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>STATUS</th>
			<th>AKSI</th>
		</tr>
		<?php
		$no = 0; 
		foreach ($anggota as $anggotas) {$no++; ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $anggotas['nama'] ?></td>
			<td><?php echo $anggotas['status'] ?></td>
			<td>
				
				<a id="lihat" data-toggle="modal" href="" data-target="#modalLht" class="btn btn-primary"
					data-nama="<?php echo $anggotas['nama'] ?>"
					data-status="<?php echo $anggotas['status'] ?>"
					data-alamat="<?php echo $anggotas['alamat'] ?>"
				>LIHAT</a>
				<a href="<?php echo base_url() ?>Admin/edit_anggota/<?php echo $anggotas['id_agt'] ?>" class="btn btn-info">EDIT</a>
				<a onclick="$('#modalDel #formDel').attr('action', '<?php echo base_url('admin/hapus_anggota/'),$anggotas['id_agt'];?>')" data-toggle="modal" href="#modalDel" class="btn btn-warning">HAPUS</a>
			</td>
		</tr>
		
		<div class="modal fade" tabindex="-1" role="dialog" id="modalDel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
			<div class="modal-header">
					<h5 class="modal-title">Yakin Akan Di Hapus?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-footer">
					<form id="formDel" action="" method="POST">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
						<button type="submit" class="btn btn-danger" >HAPUS</a>
					</form>
				</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</table>
	<div class="modal fade" tabindex="-1" role="dialog" id="modalLht">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				
					<table class="table table-borderless">
						<tr>
							<td>Nama User</td>
							<td><span id="nama"></span></td>
						</tr>
						<tr>
							<td>Status</td>
							<td><span id="status"></span></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><span id="alamat"></span></td>
						</tr>
					</table>
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
					
				</div>
				</div>
			</div>
		</div>

		<script>
		$(document).ready(function(){
			$(document).on("click","#lihat", function(){
				
				var nama = $(this).data('nama');
				var status = $(this).data('status');
				var alamat = $(this).data('alamat');

				$("#nama").text(nama);
				$("#status").text(status);
				$("#alamat").text(alamat);
			})
		})
		</script>
</div>
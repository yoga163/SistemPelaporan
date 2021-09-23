

<div class="container">
    <h2 class="justfy-content">DAFTAR LAPORAN</h2>
		
	
    <div class="row align-items-end">
        <div class="col-5">
            <form method="get" action="<?php echo base_url('admin/print'); ?>">
                        <label style="font-size: 20px;">Filter Berdasarkan</label><br>
                        <select class="form-control " name="filter" id="filter">
                            <option value="">Pilih</option>
                            <option value="1">Tanggal</option>
                            <option value="2">Bulan</option>
                            <option value="3">Tahun</option>
                        </select>

                        <div id="form-tanggal">
                            <label>Tanggal</label><br>
                            <input type="text" name="tanggal" class="input-tanggal form-control" />
                        </div>

                        <div id="form-bulan">
                            <label>Bulan</label><br>
                            <select name="bulan" class="form-control ">
                                <option value="">Pilih</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>

                        <div id="form-tahun">
                            <label>Tahun</label><br>
                            <select name="tahun" class="form-control ">
                                <option value="">Pilih</option>
                                <?php
                                foreach($tahun as $tahun2){ // Ambil data tahun dari model yang dikirim dari controller
                                    echo '<option value="'.$tahun2['tahun'].'">'.$tahun2['tahun'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <!--<button type="submit" class="btn btn-info">Tampilkan</button>-->
                        <button type="submit" class="btn btn-secondary"><i class=" fa fa-print"></i><span >CETAK</span></button>
                        <a href="<?php echo base_url('admin/laporan'); ?>" class="btn btn-warning">Reset Filter</a>
                        
                        <a href="<?php echo base_url('admin/tambah_lapor') ?>" class="btn btn-info"><i class=" fa fa-plus"></i><span>TAMBAH</span></a>
                        
            </form>
        
        </div>
    </div>
    <br>
    <p>
        <?php if ($this->session->flashdata('tambah')) { ?>
        <div role="alert" class="alert alert-success">
        <button data-dismiss="alert" class="close" type="button">
            <span aria-hidden="true">x</span></button>
            <?= $this->session->flashdata('tambah') ?>
        </div>
        <?php } ?>
        <?php if ($this->session->flashdata('hapus')) {?>
        <div role="alert" class="alert alert-succes">
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
			<th>NO HP</th>
			<th>LAPORAN</th>
			<th>TANGGAl</th>
            <th>foto</th>
			<th>AKSI</th>
		</tr>
		<?php
		
		$no = 0; 
		foreach ($lapor as $lapors) :$no++; 
		$tgl = date('d-m-Y', strtotime($lapors['tgl']));?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $lapors['nama']?></td>
			<td><?php echo $lapors['nohp']?></td>
			<td><?php echo $lapors['laporan']?></td>
			<td><?php echo $lapors['tgl']?></td>
            <td><img src="<?php echo base_url()?>/assets/foto/<?php echo $lapors['foto']?>" style="height: 20px;width: 20px;"></td>
			<td>
				<?php if($this->session->userdata('akses')=='1') {?>
				<a id="lihat" data-toggle="modal" href="" data-target="#modalLht" class="btn btn-primary"
					data-nama="<?php echo $lapors['nama'] ?>"
					data-nohp="<?php echo $lapors['nohp'] ?>"
					data-laporan="<?php echo $lapors['laporan'] ?>"
                    data-tanggal="<?php echo $lapors['tgl'] ?>"
                    data-image="<?php echo base_url()?>assets/foto/<?php echo $lapors['foto'] ?>"
				>LIHAT</a>
				
				<a href="<?php echo base_url(); ?>admin/edit/<?php echo $lapors['id_lapor']?>" class="btn btn-info">EDIT</a>
				<a onclick="$('#modalDel #formDel').attr('action', '<?php echo base_url('admin/hapus/'),$lapors['id_lapor'];?>')" data-toggle="modal" href="#modalDel" class="btn btn-warning">HAPUS</a>
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
		<?php if($this->session->userdata('akses')=='2') {?>
            <a id="lihat" data-toggle="modal" href="" data-target="#modalLht" class="btn btn-primary"
					data-nama="<?php echo $lapors['nama'] ?>"
					data-nohp="<?php echo $lapors['nohp'] ?>"
					data-laporan="<?php echo $lapors['laporan'] ?>"
                    data-tanggal="<?php echo $lapors['tgl'] ?>"
                    data-image="<?php echo base_url()?>assets/foto/<?php echo $lapors['foto'] ?>"
				>LIHAT</a>
		<?php } ?>
		
		<?php endforeach?>
	</table>
	<p class="page"><?php echo $links; ?></p>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalLht">
			<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail Laporan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-borderless">
                                    <tr>                                    
                                        <td>Nama Pelapor</td>
                                        <td><span id="nama"></span></td>                                        
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td><span id="nohp"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Laporan</td>
                                        <td><span id="laporan"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td><span id="tanggal"></span></td>
                                        
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="col">
                                <img style="width: 250px; height: 300px;"  src="" id="image">
                               
                            </div>
                        </div>
                    </div>
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
				var nohp = $(this).data('nohp');
				var laporan = $(this).data('laporan');
                var tanggal = $(this).data('tanggal');
                var foto = $(this).data('image');
                

				$("#nama").text(nama);
				$("#nohp").text(nohp);
				$("#laporan").text(laporan);
                $("#tanggal").text(tanggal);
                $("#image").attr("src", foto);
			})
		})
		</script>
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    });
    </script>
</div>

<html><head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan</title>

	<style>
		body{
			font-family: "Times New Roman", Times, serif;
		}
		.pjg1{
			width:150px;
		}
		.pjg2{
			width: 190px;
		}
		.pjg3{
			width:270px;
		}
		.tab{
			border:1px solid black;
			border-collapse: collapse;
		}

		.line-title{
		border: 0;
		border-style: inset;
		border-top: 1px solid #000;
		}
		
	</style>
</head><body>

		<table>
			<tr>
				<td>
				<img src="assets/images/logo.png" style="
						
						margin-left:100px;
						width: 80px; 
						height: auto;
						position:relative;">
				</td>
				<td  align="center" style="padding-left:100px;">
					<p style="line-height: 1.6;">
						
						<span style="font-weight: bold; font-size: 17px; position:absolute;">PEMERINTAH KOTA SEMARANG<br>
						KECAMATAN TEMBALANG</span><br>
						<b style="font-size: 25px;">KELURAHAN SENDANGGUWO</b><br>
						Jl. Sendangguwo Raya No.56 Telp.6724550 Semarang 50273<br>
						<i>Email : kelurahansendangguwo@gmail.com</i></span>
					</p>
				</td>
			</tr>
		</table>
		<hr class="line-title" style="margin:0px;" > 
		<p align="center" style="margin-top:20px;">
			REKAP LAPORAN KERUSAKAN FASILITAS <br>

		</p>
		
		<table border="1" align="center" class="tab" cellpadding="8">
			<tr>
				<th>NO</th>
				<th class="pjg1">NAMA</th>
				<th class="pj2">NO HP</th>
				<th class="pjg3">LAPORAN</th>
				<th class="pjg3">ALAMAT</th>
				<th>TANGGAL</th>
				
			</tr>
			<?php
			if( ! empty($lapor)){
			$no = 0; 
			foreach ($lapor as $lapors) :$no++; ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $lapors['nama']?></td>
				<td><?php echo $lapors['nohp']?></td>
				<td><?php echo $lapors['laporan']?></td>
				<td><?php echo $lapors['alamat']?></td>
				<td><?php echo $lapors['tgl']?></td>
				
				
			</tr>
			<?php endforeach; }?>
		</table>
		<table align="right" style="text-align:center;
					margin-top:30px;
					margin-right:20px;">
				<tr>
					<td>
						<p >
							Semarang, <?php echo date('d F Y');?> <br>
							LURAH SENDANGGUWO
							<BR>
							<BR>
							<BR>
							<br>
							<u>AGUSTINUS KRISTIYOKO,S.pd., MM.</u><BR>
							NIP. 1671024 199310 1 002
						</p>
					</td>
				</tr>
		</table>
</body></html>
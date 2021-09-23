<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{

		parent :: __construct();
		$this->load->model('Lapor_m');
		$this->load->model('Anggota_m');
		$this->load->model('Login_m');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		if($this->session->userdata('masuk') != TRUE){
            $url=base_url('login');
            redirect($url);
        }
		
	}

    public function index()
	{
			$data['user'] = $this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 ;
			$data['msk'] = $this->Anggota_m->Ambil_anggota();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('template/admin/admin',$data);
			$this->load->view('template/footer');
    }

	/*Laporan*/
    public function laporan(){
		
			$config = array();
			$config["base_url"] = base_url() . "Admin/laporan";
			$config["total_rows"] = $this->Lapor_m->jml_lapor();
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;

			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';   

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["links"] = $this->pagination->create_links(); 
		
			$data['user'] = $this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 ;
			$data['lapor'] = $this->Lapor_m->Ambil_lapor($config['per_page'],$page);
			$data['tahun'] = $this->Lapor_m->getTahun();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('template/admin/laporan',$data);
			$this->load->view('template/footer');
		
	}
	
	public function tambah_lapor()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('template/admin/tambah_laporan');
		$this->load->view('template/footer');
	}

	public function do_tambah()
	{
		$gambar = $_FILES['foto']['name'];
		if ($gambar == "") {
			$this->session->set_flashdata('gagalGbr','Gambar tidak ada');
			redirect('admin/tambah_lapor');
		} else {
			$config['allowed_types'] = "img|png|gif|jpg|jpeg";
			$config['upload_path'] = "./assets/foto";
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('gagal','Data Tidak Berhasil Ditambah');
				redirect('admin/tambah_lapor');
			} else {
				$this->Lapor_m->do_tambah();
				$this->session->set_flashdata('tambah','Data Berhasil Ditambah');
				redirect('admin/laporan');
			}
		}
	}

	public function edit($id)
		{
			$data['lapor'] = $this->Lapor_m->show_lapor($id);
		
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('template/admin/edit_laporan',$data);
			$this->load->view('template/footer');
		}
		
	public function do_edit()
		{
			$gambar = $_FILES['foto']['name'];
		if ($gambar == "") {
				$this->Lapor_m->do_edit2();
				$this->session->set_flashdata('tambah','Data Berhasil Diedit');
				redirect('Admin/laporan');
		} else {
			$config['allowed_types'] = "img|png|gif|jpg|jpeg";
			$config['upload_path'] = "./assets/foto";
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('gagal','Data Tidak Berhasil Diedit');
				
			} else {
				$this->Lapor_m->do_edit();
				$this->session->set_flashdata('tambah','Data Berhasil Diupdate');
				redirect('Admin/laporan');
			}
		}
		echo $this->upload->display_errors();
	}

	public function lihat($id)
		{
			$data['user'] = $this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 ;
			$data['lapor'] = $this->Lapor_m->lihat_data($id);
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('template/admin/lihat_laporan',$data);
			$this->load->view('template/footer');
		}

		public function hapus($id)
		{
			$this->Lapor_m->hapus_lapor($id);
			$this->session->set_flashdata('hapus','Berhasil Dihapus');
			redirect('admin/laporan');
		}


/*Controller anggota*/

	function anggota()
	{
		$data['user'] = $this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 2 ;
		$data['anggota'] = $this->Anggota_m->Ambil_anggota();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('template/admin/anggota',$data);
		$this->load->view('template/footer');
	}

		public function tambah_anggota()
		{
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('template/admin/tambah_anggota');
			$this->load->view('template/footer');
		}

		public function do_anggota()
		{
			$data = [
				"nama" => $this->input->post("nama"),
				"username" => $this->input->post("username"),
				"pass" => $this->input->post("password"),
				"level" => $this->input->post("status"),
				"alamat" => $this->input->post("alamat"),
								
			];
			if($data == NULL){
				$this->session->set_flashdata('gagal','Anggota Tidak Berhasil Ditambah');
				redirect('admin/anggota');
			}else{
				$this->Anggota_m->do_tambah();
				$this->session->set_flashdata('tambah','Anggota Berhasil Ditambah');
				
				redirect('admin/anggota');
			}
		}
	
	
	public function lihat_anggota($id)
	{
		$data['user'] = $this->session->userdata('akses') == 1;
		$data['anggota']= $this->Anggota_m->show_anggota($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('template/admin/lihat_anggota',$data);
		$this->load->view('template/footer');
	}

	public function edit_anggota($id)
	{
		$data['anggota']= $this->Anggota_m->show_anggota($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('template/admin/edit_anggota',$data);
		$this->load->view('template/footer');
	}

	public function do_edit_anggota()
	{
		
			$this->Anggota_m->edit_anggota();
			$this->session->set_flashdata('tambah','Data Berhasil Diupdate');
			redirect('Admin/anggota');
		
	}
	public function hapus_anggota($id)
	{
		$this->Anggota_m->hapus_anggota($id);
		$this->session->set_flashdata('hapus','Data Berhasil Di Hapus');
		redirect('admin/anggota');
	}

	/*Setting*/

	public function setting()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('template/admin/setting');
		$this->load->view('template/footer');
	}

	public function do_setting()
	{
		
		$cek_old = $this->Anggota_m->cek_old();
		if ($cek_old == False){
			$this->session->set_flashdata('error','Old password not match!' );
			redirect('admin/setting');
		}else{
				
			$this->Anggota_m->do_edit();
			$this->session->sess_destroy();
			$this->session->set_flashdata('error','Your password success to change, please relogin !' );
			redirect('login');

        }
	}

	/*print*/
	public function print()
	{
		if(isset($_GET['filter']) && ! empty($_GET['filter']))
		{ 
			$filter = $_GET['filter'];
			if($filter == '1'){ 
				$tanggal = $_GET['tanggal'];                                
				$ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tanggal));                             
				$transaksi = $this->Lapor_m->tanggal($tanggal);
				 
			}else if($filter == '2'){ 
				$bulan = $_GET['bulan'];                
				$tahun1 = $_GET['tahun'];                
				$nama_bulan = array(
					'', 'Januari','Februari','Maret',
					'April','Mei','Juni','Juli','Agustus',
					'September','Oktober','November','Desember');                                
				$ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun1;                
				$transaksi = $this->Lapor_m->bulan($bulan, $tahun1); 
			}else{
				$tahun1 = $_GET['tahun'];                                
				$ket = 'Data Transaksi Tahun '.$tahun1;                
				
				$transaksi = $this->Lapor_m->tahun($tahun1);
			}  
        }else{ 
			$ket = 'Semua Data Transaksi';
            $transaksi = $this->Lapor_m->Ambil_lapor($limit=null,$start=null);
		}
		

		$data['lapor'] = $transaksi;
		$html = $this->load->view('template/pdf',$data, TRUE);
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
		
		
		$mpdf->WriteHTML($html);
		$mpdf->Output('Laporan.pdf','I');



	}

	/*filter*/
	public function filter()
	{
		if(isset($_GET['filter']) && ! empty($_GET['filter']))
		{ 
			$filter = $_GET['filter']; 
			if($filter == '1'){ 
				$tgl = $_GET['tanggal'];                                
				$ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));                
				$url_cetak = 'admin/print?filter=1&tanggal='.$tgl;               
				$transaksi = $this->Lapor_m->tanggal($tgl);
			}else if($filter == '2'){ 
				$bulan = $_GET['bulan'];                
				$tahun1 = $_GET['tahun'];                
				$nama_bulan = array(
					'', 'Januari','Februari','Maret',
					'April','Mei','Juni','Juli','Agustus',
					'September','Oktober','November','Desember');                                
				$ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun1;                
				$url_cetak = 'admin/print?filter=2&bulan='.$bulan.'&tahun='.$tahun1;                
				$transaksi = $this->Lapor_m->bulan($bulan, $tahun1); 
			}else{ 
				$tahun1 = $_GET['tahun'];                                
				$ket = 'Data Transaksi Tahun '.$tahun1;                
				$url_cetak = 'admin/print?filter=3&tahun='.$tahun1;                
				$transaksi = $this->Lapor_m->tahun($tahun1); 
			}       
		}else{ 
			$transaksi = $this->Lapor_m->Ambil_lapor2();
			$url_cetak = 'admin/print';
		} 
		$data['transaksi'] = $transaksi;
		$data['url_cetak'] = $url_cetak;
		
        
	}

}
?>
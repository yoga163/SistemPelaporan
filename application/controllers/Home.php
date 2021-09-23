<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{

		parent :: __construct();
		$this->load->model('Lapor_m');
		$this->load->library('pagination');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		
	}
	public function index()
	{
		$config = array();
		$config["base_url"] = base_url() . "home/index";
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

		$data['lapor'] = $this->Lapor_m->Ambil_lapor($config['per_page'],$page);
		$this->load->helper('url');
		$this->load->view('template/home/home',$data);
		$this->load->view('template/home/footer');
	}

	public function do_tambah2()
	{
		$gambar = $_FILES['foto']['name'];
		if ($gambar == "") {
			echo "Tidak Ada Gambar";
		} else {
			$config['allowed_types'] = "img|png|gif|jpg|jpeg";
			$config['upload_path'] = "./assets/foto";
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')){
				echo "gagal";
			} else {
				$this->Lapor_m->do_tambah();
				$this->session->set_flashdata('tambah','Data Berhasil Ditambah');
				redirect('home');
			}
		}
	}

	public function tinjau()
	{
		$data['lapor']= $this->Lapor_m->Ambil_lapor();
		$this->load->view('template/home/tinjau',$data);
		$this->load->view('template/home/footer');
	}

}

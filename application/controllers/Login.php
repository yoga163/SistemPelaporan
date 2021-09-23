<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Login_m');
        $this->load->model('Lapor_m');
		
	}

	public function index()
	{			
		if($this->session->userdata('ses_nama')){
			redirect('admin');
		}
			$this->load->view('template/login');

    }

	public function do_login()
	{
		$user = $this->input->post('uname');
		$pasw = $this->input->post('password');
		$login = $this->Login_m->Cek_login($user,$pasw);

        if($login->num_rows() > 0){ //jika login sebagai admin
                $data=$login->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id_agt']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    $this->session->set_flashdata('msg','Anda Berhasil Login');
                    redirect('admin');

                 }else{ //akses user
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['id_agt']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    $this->session->set_flashdata('msg','Anda Berhasil Login');
                    redirect('admin');
                }

        }else{ 
                
                $url=base_url('login');
                $this->session->set_flashdata('msg','Username Atau Password Salah');
                redirect($url);
        }
	}

	function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }

    function pdf()
    {
        $data['lapor'] = $this->Lapor_m->Ambil_lapor2();
        $this->load->view('template/pdf',$data);
    }
    

}


?>
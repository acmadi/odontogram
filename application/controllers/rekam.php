<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		# code...
        parent::__construct();
        $this->load->helper('url');
	}
	public function index()
	{
		redirect(base_url()."index.php/pasien");
	}
	public function tambah($id_pasien)
	{
		$this->load->model('m_main');
		$data['lib_gigi'] = $this->m_main->getall('lib_gigi');
		$data['title'] = 'Tambah Rekam Gigi';
		$data['id_pasien'] = $id_pasien;
		
		$data['id_rekam'] = $this->m_main->get_id('rekam_pasien', 'id_rekam');
		$id_rekam = $data['id_rekam'][0];
		$data['id_rekam'] = $id_rekam->id_rekam;
		$data['id_rekam'] = $data['id_rekam']+1;
		
		$this->load->view('dashboard/header', $data);
		$this->load->view('rekam/add', $data);
		$this->load->view('dashboard/footer');
	}

	public function record($id_pasien){
		$data['title'] = "Rekam Pasien";
		$this->load->model('m_main');
		$data['rekam_pasien'] = $this->m_main->select_where('rekam_pasien', array('id_pasien' => $id_pasien));
		$data['id_pasien'] = $id_pasien;
		$this->load->view('dashboard/header', $data);
		$this->load->view('rekam/record', $data);
		$this->load->view('dashboard/footer');
	}

	public function ubah($id)
	{
		
	}
	public function update()
	{
		
	}

	public function add_kondisi_gigi(){
		$this->load->model('m_main');
	}
}

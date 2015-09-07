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
		$data['id_rekam'] = $this->m_main->get_id('rekam_pasien', 'id_rekam');

		if (empty($data['id_rekam'])){
			$data['id_rekam'] = 1;
		}
		else{
			$id_rekam = $data['id_rekam'][0];
			$data['id_rekam'] = $id_rekam->id_rekam;
			$data['id_rekam'] = $data['id_rekam']+1;
		}
		$id_rekam = $data['id_rekam'];
		$data = array(
			'id_rekam' => $id_rekam,
			'id_pasien' => $id_pasien,
			'tanggal_rekam' => date("Y-m-d"),
		);
		$this->m_main->insert('rekam_pasien', $data);
		redirect(base_url()."index.php/rekam/view_odontogram/".$id_rekam);
	}

	public function view_odontogram($id_rekam){
		
		$this->load->model('m_main');
		$data['lib_gigi'] = $this->m_main->getall('lib_gigi');
		$data['title'] = 'Tambah Rekam Gigi';
		
		$res_rekam_pasien = $this->m_main->select_where('rekam_pasien', array('id_rekam' => $id_rekam));
		$res_rekam_pasien = $res_rekam_pasien[0];
		
		$data['id_pasien'] = $res_rekam_pasien['id_pasien'];
		$data['id_rekam'] = $id_rekam;

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
		$gigi = $this->m_main->select_where('gigi', array('id_rekam' => $_POST['id_rekam']));
		$detail_gigi = $_POST['ada_gigi'];
		
		if ($_POST['ada_gigi'] == "ada"){
			$detail_gigi = $_POST['permukaan_gigi']." ".$_POST['keadaan_gigi']." ".$_POST['bahan_restorasi']." ".$_POST['restorasi']." ".$_POST['protesa'];
		}
		if (empty($gigi)){
			$insert_rekam_pasien = array(
				'id_pasien' => $_POST['id_pasien'],
				'id_rekam' => $_POST['id_rekam'],
			);
			$insert_gigi = array(
				'id_rekam' => $_POST['id_rekam'],
				'G'.$_POST['kode_gigi'] => $detail_gigi,
			);
			$this->m_main->insert('gigi', $insert_gigi);
		}else {
			$update_gigi = array(
				'G'.$_POST['kode_gigi'] => $detail_gigi,
			);
			$this->m_main->update('gigi', $update_gigi, array('id_rekam' => $_POST['id_rekam']));
		}
		redirect(base_url()."index.php/rekam/view_odontogram/".$_POST['id_rekam']);
	}

	public function simpan_rekaman_gigi(){
		$this->load->model('m_main');
		$gigi = $this->m_main->select_where('gigi', array('id_rekam' => $_POST['id_rekam']));
		if (empty($gigi)){
			$insert_gigi = array(
				'id_rekam' => $_POST['id_rekam'],
				'occlusi' => $_POST['oclusi'],
				'torus_palatinus' => $_POST['palatinus'],
				'torus_mandibularis' => $_POST['mandibula'],
				'palatum' => $_POST['palatum'],
				'diastema' => $_POST['diastema'],
				'gigi_anomali' => $_POST['anomali'],
				'lain_lain' => $_POST['lain_lain'],
			);
			$this->m_main->insert('gigi', $insert_gigi);
		}else {
			$update_gigi = array(
				'occlusi' => $_POST['oclusi'],
				'torus_palatinus' => $_POST['palatinus'],
				'torus_mandibularis' => $_POST['mandibula'],
				'palatum' => $_POST['palatum'],
				'diastema' => $_POST['diastema'],
				'gigi_anomali' => $_POST['anomali'],
				'lain_lain' => $_POST['lain_lain'],
			);
			$this->m_main->update('gigi', $update_gigi, array('id_rekam' => $_POST['id_rekam']));
		}
		redirect(base_url()."index.php/rekam/record/".$_POST['id_pasien']);
	}
	public function hapus($id_rekam){
		$this->load->model('m_main');
		$this->m_main->delete('rekam_pasien', array('id_rekam' => $id_rekam));
		$this->m_main->delete('gigi', array('id_rekam' => $id_rekam));
		redirect(base_url()."index.php/pasien");
	}
}

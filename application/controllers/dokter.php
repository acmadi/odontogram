<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

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
		$data['title'] = "Dokter";
		$this->load->model('m_main');
		$data['dokter'] = $this->m_main->getall('dokter');
		$this->load->view('dashboard/header', $data);
		$this->load->view('dokter/index', $data);
		$this->load->view('dashboard/footer');
	}
	public function tambah()
	{
		$data['title'] = "Dokter - New";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dokter/add');
		$this->load->view('dashboard/footer');
	}
	public function ubah($id)
	{
		$this->load->model('m_main');
		$where = array(
			'id_dokter' => $id
		);
		$data['dokter'] = $this->m_main->select_where('dokter',$where);
		$data['title'] = "Dokter - Update";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dokter/update', $data);
		$this->load->view('dashboard/footer');
	}
	public function add()
	{
		# code...
		$this->load->model('m_main');
		$table = 'dokter';
		$data = array(
			'id_dokter' => $this->input->post('id_dokter'),
			'nama_dokter' => $this->input->post('nama_dokter'),
			'alamat_dokter' => $this->input->post('alamat_dokter'),
			'alamat_praktik_dokter' => $this->input->post('alamat_praktik_dokter'),
			'telepon_dokter' => $this->input->post('telepon_dokter'),
			'password_dokter' => md5($this->input->post('password_dokter'))
		);

		$this->m_main->insert($table, $data);
		$this->index();
	}
	public function update()
	{
		$data = array(
			'nama_dokter' => $this->input->post('nama_dokter'),
			'alamat_dokter' => $this->input->post('alamat_dokter'),
			'alamat_praktik_dokter' => $this->input->post('alamat_praktik_dokter'),
			'telepon_dokter' => $this->input->post('telepon_dokter'),
			'password_dokter' => md5($this->input->post('password_dokter'))
		);
		$where = array(
			'id_dokter' => $this->input->post('id_dokter')
		);
		$this->load->model('m_main');
		$this->m_main->update('dokter',$data, $where);
		$this->index();
	}
}

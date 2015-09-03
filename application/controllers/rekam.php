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

	}
	public function tambah($id_pasien, $notif = 'not_found')
	{
		$data['title'] = "Pasien";
		$this->load->model('m_main');
		$data['pasien'] = $this->m_main->getall('pasien');
		$this->load->view('dashboard/header', $data);
		$this->load->view('rekam/add', array("notif" => $notif));
		$this->load->view('dashboard/footer');
	}
	public function ubah($id)
	{
		
	}
	public function update()
	{
		
	}
	public function record($id_pasien){

	}
}

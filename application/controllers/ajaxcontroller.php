<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
	public function get_odontogram(){
		echo "haha";
		$this->load->view("rekam/odontogram");
	}
	public function get_rekam(){
		$this->load->view('pasien/rekam');
	}
	public function get_detail_odon(){
		$this->load->model('m_main');
		$data['post'] = $_POST;
		$data['permukaan_gigi'] = $this->m_main->getall('lib_permukaan_gigi');
		$data['keadaan_gigi'] = $this->m_main->getall('lib_keadaan_gigi');
		$data['bahan_restorasi'] = $this->m_main->getall('lib_bahan_restorasi');
		$data['restorasi'] = $this->m_main->getall('lib_restorasi');
		$data['protesa'] = $this->m_main->getall('lib_protesa');
		
		$data['permukaan_gigi'] = $data['permukaan_gigi'];
		$data['keadaan_gigi'] = $data['keadaan_gigi'];
		$data['bahan_restorasi'] = $data['bahan_restorasi'];
		$data['restorasi'] = $data['restorasi'];
		$data['protesa'] = $data['protesa'];

		$this->load->view("rekam/detail_odon", $data);
	}
	public function save_detail_odon(){
		
	}
}
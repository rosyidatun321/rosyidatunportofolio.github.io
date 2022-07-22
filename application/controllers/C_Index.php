<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Index extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	// $this->load->model('M_index');
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_index');
	}

	public function index()
	{
		$data['title'] = "Input Data Pasien";
		$this->load->view('V_header', $data);
		$this->load->view('V_index', $data);
		$this->load->view('V_footer');
	}

	public function saveData()
	{
		$data_pasien = $_POST;
		$insert = array(
			'no_rm'	=> $data_pasien['no_rm'],
			'nama'	=> $data_pasien['nama_pasien'],
			'alamat'	=> $data_pasien['alamat_pasien'],
			'jenkel'	=> $data_pasien['jenkel'],
			'jenis_rawat'	=> $data_pasien['jenis_rawat'],
			'no_hp'	=> $data_pasien['no_hp'],
			'keluhan'	=> $data_pasien['keluhan'],
			'ruang_rawat'	=> ($data_pasien['jenis_rawat'] == 1) ? $data_pasien['ruang_rawat'] : '-'
		);

		$this->M_index->inserData($insert);
		redirect('');
	}
}

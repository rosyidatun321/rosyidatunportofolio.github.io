<?php
class C_Monitoring extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_index');
	}

	public function index()
	{
		$data['pasien'] = $this->M_index->getData();
		$data['title'] = "Input Data Pasien";
		$this->load->view('V_header', $data);
		$this->load->view('V_monitoring', $data);
		$this->load->view('V_footer');
	}
}

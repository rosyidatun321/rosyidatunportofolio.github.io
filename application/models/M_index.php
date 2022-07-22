<?php
class M_index extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		// $db = db_connect();
		// $this->load->database();
	}

	public function getData()
	{
		$sql = "SELECT * from t_datadiri";

		return $this->db->query($sql)->result_array();
	}

	public function inserData($data)
	{
		return $this->db->insert('t_datadiri', $data);
	}
}

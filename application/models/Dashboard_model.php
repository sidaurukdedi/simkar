<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public $db_tabel = 'employee';

	public function count_m()
	{

		return $this->db->from($this->db_tabel)
						->where('gender', 'M')
						->get()
						->num_rows();
	}

	public function count_f()
	{

		return $this->db->from($this->db_tabel)
						->where('gender', 'F')
						->get()
						->num_rows();
	}

	public function count_contract()
	{

		return $this->db->from($this->db_tabel)
						->where('id_employee_status', '02')
						->get()
						->num_rows();
	}

	public function count_fulltime()
	{

		return $this->db->from($this->db_tabel)
						->where('id_employee_status', '01')
						->get()
						->num_rows();
	}

	// public function count_m()
	// {

	// 	$this->db->from($this->db_tabel);
 //        $this->db->where('gender', 'F');          
 //        $query = $this->db->get();
	// 	// $this->db->select('count(*)');
	// 	// $this->db->from($this->db_tabel);
	// 	// $this->db->where('gender','M');
	// 	// $query = $this->db->get();
	// 	echo $query->num_rows();
	// 	die();
	// }
}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */
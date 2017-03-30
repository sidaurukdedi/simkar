<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public $data = array(
                        'breadcrumb'    => 'Dashboard',
                        'main_view'     => 'dashboard',
                        );

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Dashboard_model', 'dashboard', TRUE);
    }

	public function index()
	{
		$this->data['count_m'] = $this->dashboard->count_m();
		$this->data['count_f'] = $this->dashboard->count_f();
		$this->data['count_contract'] = $this->dashboard->count_contract();
		$this->data['count_fulltime'] = $this->dashboard->count_fulltime();
		$this->load->view('template', $this->data);
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
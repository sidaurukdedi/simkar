<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public $data = array(
                        'breadcrumb'    => 'Dashboard',
                        'main_view'     => 'dashboard',
                        );

	public function index()
	{
		$this->load->view('template', $this->data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
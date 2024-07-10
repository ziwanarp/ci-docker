<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	

	public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('table_model');
    }

	public function index()
	{

        $data['test'] = $this->table_model->getTestName();
        $this->load->view('welcome_message', $data);
	}
}

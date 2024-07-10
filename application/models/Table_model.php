<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load database
        $this->load->database();
    }

    // Function to get table names
    public function getTestName()
    {
        $query = $this->db->get('test');
        return $query->result_array();
    }

}

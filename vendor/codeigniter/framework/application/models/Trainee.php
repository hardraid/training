<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainee extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	public function save($data)
	{
		$this->load->database();
		$this->db->set($data);
   		$this->db->insert('trainee');
	}
}

/* End of file Trainee.php */
/* Location: ./application/models/Trainee.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('training');
	}

	public function send()
	{
		$this->load->helper('url');
		$data['result'] = $this->input->post('result');
		$data['name'] = $this->input->post('name');
		$data['ip'] = $this->input->ip_address();
		$data['created_at'] = date('Y-m-d H:i:s');;
		$this->load->model('Trainee', 'trainee');
		$this->trainee->save($data); 
		redirect('/training/confirm', 'refresh');
	}

	public function confirm()
	{
		$this->load->helper('url');
		$this->load->view('confirm');
	}
}

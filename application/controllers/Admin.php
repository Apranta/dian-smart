<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->data['nip'] 	= $this->session->userdata('nip');
		// $this->data['role']	= $this->session->userdata('role');
		// if (!isset($this->data['nip'], $this->data['role']))
		// {
		// 	$this->session->sess_destroy();
		// 	redirect('login');
		// 	exit;
		// }

		// if ($this->data['role'] != 'admin')
		// {
		// 	$this->session->sess_destroy();
		// 	redirect('login');
		// 	exit;
		// }

	}

	public function index()
	{
		$this->data['title'] 	= 'Dashboard | ' . $this->title;
		$this->data['content']	= 'test';
		$this->template($this->data);
	}

}
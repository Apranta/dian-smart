<?php 

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['username'] 	= $this->session->userdata('username');
		$this->data['role']	= $this->session->userdata('role');
		if (isset($this->data['role']))
		{
			if($this->data['role'] == 0){
				redirect('admin');
			}
			else{
				redirect('jurusan');
			}
			exit;
		}
	}

	public function index()
	{
		$this->data['title']	= 'Login | ' . $this->title;
		$this->data['content']	= 'login';
		$this->load->view('login', $this->data);
	}

	public function login_process()
	{
		if ($this->POST('login-submit'))
		{
			$this->load->model('user_m');
			$account = $this->user_m->login($this->POST('username'), md5($this->POST('password')));
			if (!$account)
			{
				$this->flashmsg('<i class="fa fa-warning"></i> username atau password salah', 'danger');
			}
		}

		redirect('login');
	}
}
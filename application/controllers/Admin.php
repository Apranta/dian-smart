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
		$this->load->model([
			'Barang_m',
			'Barang_detail_m',
			'Jurusan_m'
		]);

	}

	public function index()
	{
		$this->data['title'] 	= 'Dashboard | ' . $this->title;
		$this->data['content']	= 'test';
		$this->template($this->data);
	}

	public function barang()
	{	
		if ($this->GET('delete')){
			$this->Barang_m->delete($this->GET('id'));
			redirect('admin/barang');
			exit;
		}
		if ($this->POST('simpan')) {
			$this->Barang_m->insert([
				'no_surat' => $this->POST('no_surat'),
				'nama' => $this->POST('nama'),
				'stok' => $this->POST('stok'),
				'sumber' => $this->POST('sumber')
			]);
			redirect('admin/barang');
			exit;
		}
		$this->data['data'] = $this->Barang_m->get();
		$this->data['title'] 	= 'Admin | ' . $this->title;
		$this->data['content']	= 'admin/data_barang';
		$this->template($this->data);
	}


	public function jurusan()
	{	
		if ($this->GET('delete')){
			$this->Jurusan_m->delete($this->GET('id'));
			redirect('admin/jurusan');
			exit;
		}
		if ($this->POST('simpan')) {
			$this->Jurusan_m->insert([
				'nama' => $this->POST('nama')
			]);
			redirect('admin/jurusan');
			exit;
		}
		$this->data['data'] = $this->Jurusan_m->get();
		$this->data['title'] 	= 'Admin | ' . $this->title;
		$this->data['content']	= 'admin/data_jurusan';
		$this->template($this->data);
	}

	public function detail_barang()
	{	
		$id = $this->uri->segment(3);
		if (!isset($id)){
			redirect('admin/barang');
			exit;
		}

		if ($this->GET('delete')){
			$this->Barang_detail_m->delete($this->GET('id'));
			redirect('admin/detail_barang/' . $id);
			exit;
		}
		if ($this->POST('simpan')) {
			$this->Barang_detail_m->insert([
				'no_surat' => $this->POST('no_surat'),
				'id_barang' => $id,
				'id_jurusan' => $this->POST('jurusan'),
				'jumlah' => $this->POST('jumlah')
			]);
			redirect('admin/detail_barang/' . $id);
			exit;
		}
		$this->data['data'] = $this->Barang_detail_m->get();
		$this->data['title'] 	= 'Admin | ' . $this->title;
		$this->data['content']	= 'admin/detail_barang';
		$this->template($this->data);
	}
}
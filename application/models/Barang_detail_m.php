<?php defined('BASEPATH') || exit('No direct script allowed');

class Barang_detail_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'barang_detail';
		$this->data['primary_key'] = 'id';
	}
}


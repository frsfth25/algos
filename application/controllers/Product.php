<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function index()
	{
		redirect(base_url('product/list'));
		
		// $this->load->view('product');
	}

	public function list()
	{
		$this->load->view('product_list');
	}
}

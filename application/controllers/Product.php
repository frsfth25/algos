<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('product_model', 'product');
    }

	public function index()
	{
		redirect(base_url('product/listing'));
		
		// $this->load->view('product');
	}

	public function listing()
	{
		$products = $this->product->load();
		
		$data['products'] = $products;
		// print_r($data);die;

		$this->load->view('product_list', $data);
	}
}

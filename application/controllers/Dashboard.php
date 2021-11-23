<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('product_model', 'product');
    }

	public function index()
	{
		$categories = $this->product->categories();
		$data['categories'] = $categories;
		
		// print_r($data['categories']);die;

		$trxs = $this->product->trxs(10,'desc');
		$data['trxs'] = $trxs;
		
		// print_r($data['trxs']);die;

		$outstats = $this->product->outstats();
		$data['outstats'] = $outstats;
		
		// print_r($data['trxs']);die;

		$this->load->view('dashboard', $data);
	}
}

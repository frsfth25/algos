<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function load()
    {
        $data = $this->db->get('m_product');

        return $data->result_array();
    }
}
?>
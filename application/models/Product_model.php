<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function load()
    {
        $data = $this->db->get('m_product');

        return $data->result_array();
    }

    public function outstats($month=null, $year=null)
    {
        $stats = array();

        if($month == null || $year == null)
        {
            $day = date('d');
            $month = date('m');
            $year = date('Y');

            for ($i=1; $i<=$day; $i++)
            {   
                $d = $i;
                if($i<10) $d="0".$i;
                $date = $year."-".$month."-".$d;

                $this->db->select('sum(r_trx_dtl.trx_dtl_quantity) AS trx_total_quantity');
                $this->db->from('r_trx_dtl');
                $this->db->like('trx_dtl_created', $date);
                // $this->db->group_by('trx_dtl_id');
        
                $query=$this->db->get();
                $data=$query->result();
                // print_r($data[0]->trx_total_quantity==null); die;
                
                if($data[0]->trx_total_quantity==null)
                    array_push($stats, 0);
                else
                    array_push($stats, $data[0]->trx_total_quantity);
                
                // array_push($stats, $date);   
            }
        }
        // print_r($stats); die;
        return $stats;
    }

    public function categories()
    {
        $data = $this->db->query('SELECT product_category, count(distinct(product_id)) AS product_count FROM m_product GROUP BY product_category');

        return $data->result_array();
    }

    public function trxs($limit=null,$order='asc')
    {
        // $data = $this->db->query('
            // SELECT r_trx.trx_user, r_trx.trx_address, r_trx.trx_datetime, sum(r_trx_dtl.trx_dtl_total_price) AS trx_total_price 
            // JOIN r_trx_dtl ON r_trx.trx_id = r_trx_dtl.trx_dtl_trx_id
            // FROM r_trx
            // ');

        // return $data->result_array();

        // select r_trx.trx_id, r_trx.trx_user, r_trx.trx_address, r_trx.trx_datetime, SUM(r_trx_dtl.trx_dtl_total_price) AS trx_total_price
        // from r_trx
        // join r_trx_dtl on r_trx.trx_id = r_trx_dtl.trx_dtl_trx_id
        // group by r_trx.trx_id

        $this->db->select('r_trx.trx_id, r_trx.trx_user, r_trx.trx_address, r_trx.trx_datetime, sum(r_trx_dtl.trx_dtl_total_price) AS trx_total_price');
        $this->db->from('r_trx');
        $this->db->join('r_trx_dtl','r_trx.trx_id = r_trx_dtl.trx_dtl_trx_id');
        $this->db->group_by('r_trx.trx_id');
        $this->db->order_by('r_trx.trx_datetime', $order);
        if($limit != null)
            $this->db->limit($limit);
        
        $query=$this->db->get();
        $data=$query->result_array();

        return $data;
    }
}
?>
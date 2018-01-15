<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 06-Dec-17
 * Time: 9:03 PM
 */

class Services_model extends CI_Model{
    public function  __construct()
    {
        $this->load->database();
    }

    public  function services(){
        $res = $this->db->get('service');
        return $res;
    }
}
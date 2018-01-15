<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 06-Dec-17
 * Time: 9:32 PM
 */
class Askvet_model extends CI_Model{
    public function  __construct()
    {
        $this->load->database();
    }

    public  function askquestion(){
        $res = $this->db->get('questions');
        return $res;
    }
}
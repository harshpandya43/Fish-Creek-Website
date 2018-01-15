<?php class Contact_model extends CI_Model{
public function  __construct()
{
$this->load->database();
}


public function contact($name, $email, $comment){
    $this->load->database();
    $contactinfo = Array('name'=>$name, 'email'=>$email, 'comments'=>$comment);
    $this->db->insert('contact',$contactinfo);
}

}

?>
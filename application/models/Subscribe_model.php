<?php class Subscribe_model extends CI_Model{
    public function  __construct()
    {
        $this->load->database();
    }


    public function servicetype(){
        $res = $this->db->get('service');
        return $res;
    }

    public function petname(){
        $res = $this->db->get('pet');
        return $res;
    }

    public function subscribe($clientname, $address, $email, $phone, $password, $servicetype, $pet){
        $this->load->database();

        $res = $this->db->get_where('client',array('email'=>$email));
        $count = $res->num_rows();



        if($count ==0) {

            $subscribe = Array('name' => $clientname, 'address' => $address, 'phone' => $phone, 'email' => $email, 'password' => $password);
            $this->db->insert('client', $subscribe);

            $clientid = $this->db->insert_id();
            $curr_date = date('Y-m-d');

            $subscription = Array('clientid'=>$clientid, 'serviceid'=>$servicetype, 'petid'=>$pet, 'date'=>$curr_date);
            $this->db->insert('subscription', $subscription);

            echo "Client created and subscription updated";


        }else{
            $this->db->select('clientid');
            $this->db->from('client');
            $this->db->where('email',$email);

            $clientid = $this->db->get()->row()->clientid;
            $curr_date = date('Y-m-d');

            $subscription = Array('clientid'=>$clientid, 'serviceid'=>$servicetype, 'petid'=>$pet, 'date'=>$curr_date);
            $this->db->insert('subscription', $subscription);

            echo "Subscription Updated";



        }
    }
}

?>
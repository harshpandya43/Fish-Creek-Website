<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('/templates/header');
        $this->load->view('home');

    }

    public function services()
    {
        $this->load->helper('url');
        $this->load->view('/templates/header');
        $this->load->model('Services_model');
        $data['type'] = $this->Services_model->services();
        $this->load->view('services', $data);

    }

    public function contact()
    {
        $this->load->helper('url');
        //$this->load->model('Services_model');
        //$data['type']=$this->Services_model->services();
        $this->load->view('/templates/header');
        $this->load->view('contact');
    }

    public function askvet()
    {
        $this->load->helper('url');
        $this->load->view('/templates/header');
        $this->load->model('Askvet_model');
        $data['question'] = $this->Askvet_model->askquestion();
        $this->load->view('askvet', $data);
    }

    public function subscribe()
    {
        $this->load->helper('url');
        $this->load->view('/templates/header');
        $this->load->model('Subscribe_model');
        $data['servicename']=$this->Subscribe_model->servicetype();
        $data['petname']=$this->Subscribe_model->petname();
        $this->load->view('subscribe',$data);
    }

    public function insertcontact()
    {
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');


        $this->form_validation->set_rules('firstname', 'Client name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == TRUE) {

            $name = $this->input->post('firstname');
            $email = $this->input->post('email');
            $comments = $this->input->post('comment');
            $this->load->model("Contact_model");
            $this->Contact_model->contact($name, $email, $comments);

            echo "<script type='text/javascript'>alert('Contact information inserted');</script>";

        }else{
            $this->load->helper('url');
            $this->load->view('/templates/header');
            $this->load->view('contact');
        }


    }


    public function insertclient(){

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('clientname', 'Client name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()==TRUE){
            $clientname = $this->input->post('clientname');
            $address = $this->input->post('address');
            $email = $this->input->post('clientemail');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');

            $servicetype = $this->input->post('services');
            $pet = $this->input->post('pet');




            $this->load->model("Subscribe_model");
            $this->Subscribe_model->subscribe($clientname, $address, $email, $phone, $password, $servicetype, $pet);
        }else{

            $this->load->helper('url');
            $this->load->view('/templates/header');
            $this->load->view('subscribe');
        }


    }
}





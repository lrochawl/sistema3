<?php 
defined('BASEPATH') OR exit('Ação não permitida');

class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
            'titulo' => 'Login area restrita',
        );

        $this->load->view('restrita/layout/Header', $data);
        $this->load->view('restrita/login/Index');
        $this->load->view('restrita/layout/Settings');
        $this->load->view('restrita/layout/Footer');
    }

    public function auth(){
       
        echo '<pre>';
        print_r($this->input->post());
        exit();
    }

}
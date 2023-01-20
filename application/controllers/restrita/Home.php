<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();

        //Existe uma sessão?
        if(!$this->ion_auth->loged_in()){
            $this->session->set_flashdata('erro', 'Sua sessão expirou');
            redirect('restrita/login');
        }
    }

    public function index(){

        $data = array(
            'titulo' => 'Inicio'
        );

        $this->load->view('restrita/layout/Header', $data);
        $this->load->view('restrita/home/Index');
        $this->load->view('restrita/layout/Settings');
        $this->load->view('restrita/layout/Footer');
    }
}
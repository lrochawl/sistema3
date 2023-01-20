<?php
defined('BASEPATH') OR exit('Ação não permitida');


class Sistema extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if(!$this->ion_auth->logged_in()){
            redirect('restrita/login');
        }
    }

    public function index(){

       $sistema = $this->core_model->get_by_id('sistema', array('sistema_id' => 1));

       echo '<pre>';
       print_r($sistema);
       exit();

        $data = array(
            'titulo' => 'Sistema',
        );

        $this->load->view('restrita/layout/Header', $data);
        $this->load->view('restrita/layout/Sistema');
        $this->load->view('restrita/layout/Settings');
        $this->load->view('restrita/layout/Footer');
    }
}
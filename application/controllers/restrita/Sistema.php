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

       

        $data = array(
            'titulo'  => 'Informações da loja',
            'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
            'scripts' => array(
                'js/mask/jquery.mask.min.js',
                'js/mask/custom.js'
            ),
        );

        $this->load->view('restrita/layout/header', $data);
        $this->load->view('restrita/sistema/index');
        $this->load->view('restrita/layout/settings');
        $this->load->view('restrita/layout/footer');
    }
}
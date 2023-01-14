<?php 

defined('BASEPATH') OR exit("Ação não permitida");

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $data = array(
            'usuarios' => $this->ion_auth->users()->result()
        );

        echo '<pre>';
        print_r($data);
        exit();
    }
}
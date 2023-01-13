<?php

defined('BASEPATH') or exit('Ação não permitida');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();

        //Existe uma sessão?
    }

    public function index(){
        echo "pagina restrita";
    }
}
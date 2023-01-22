<?php
defined('BASEPATH') or exit('Ação não permitida');


class Sistema extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('restrita/login');
        }
    }

    public function index()
    {

        $this->form_validation->set_rules('sistema_razao_social', 'Razão Social', 'trim|required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('sistema_nome_fantasia', 'Nome Fantasia', 'trim|required|min_length[4]max_length[100]');
        $this->form_validation->set_rules('sistema_cnpj', 'CNPJ', 'trim|required|exact_lenth[18]');
        $this->form_validation->set_rules('sistema_ie', 'Inscrição Estadual', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_fixo', 'Telefone Fixo', 'trim|required|exact_length[14]|');
        $this->form_validation->set_rules('sistema_telefone_movel', 'Telefone Movel', 'trim|required|min_length[14]|max_length[15]');
        $this->form_validation->set_rules('sistema_email', 'E-mail de contato', 'trim|required|valid_email|max_length[100]');
        $this->form_validation->set_rules('sistema_site_url', 'URL do site', 'trim|required|valid_url|max_length[100]');
        $this->form_validation->set_rules('sistema_cep', 'CEP', 'trim|required|exact_length[9]');
        $this->form_validation->set_rules('sistema_endereco', 'Endereço', 'trim|required|min_length[5]|max_length[145]');
        $this->forma_validation->set_rules('sistema_numero', 'Numero', 'trim|required|max_length[30]');
        $this->form_validation->set_rules('sistema_cidade', 'Cidade', 'trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('sistema_estado', 'UF', 'trim|required|exact_length[2]');
        $this->form_validation->set_rules('sistema_produtos_destaques', 'Quntidade de produtos em destaque', 'trim|required|integer');

        if ($this->form_validation->run()) {

            echo '<pre>';
            print_r($this->input->post());
            exit();
        } else {

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
}

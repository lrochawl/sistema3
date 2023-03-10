<?php
defined('BASEPATH') or exit('Ação não permitida');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'titulo' => 'Login area restrita',
        );

        $this->load->view('restrita/layout/header', $data);
        $this->load->view('restrita/login/index');
        $this->load->view('restrita/layout/settings');
        $this->load->view('restrita/layout/footer');
    }

    public function auth()
    {

        $identity = $this->input->post('email');
        $password = $this->input->post('password');
        $remenber = ($this->input->post('remenber' ? TRUE : FALSE));

        if ($this->ion_auth->login($identity, $password, $remenbe)) {
            $this->session->set_flashdata('sucesso', 'Seja bem-vindo(a)');
            redirect('restrita');
        } else {
            $this->session->set_flashdata('erro', 'Por favor verifique suas credencias de acesso');
            redirect('restrita/login');
        }
    }

    public function logout()
    {
        if ($this->ion_auth->logged_in()) {
            $this->session->set_flashdata('erro', 'Sessão encerrada');
            $this->ion_auth->logout();
        }

        redirect('restrita/login');
    }
}

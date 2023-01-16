<?php

defined('BASEPATH') or exit("Ação não permitida");

class Usuarios extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array(
            'titulo' => 'Usuarios cadastrados',
            'usuarios' => $this->ion_auth->users()->result(),
            'styles' => array(
                'bundles/datatables/datatables.min.css',
                'bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'
            ),
            'scripts' => array(
                'bundles/datatables/datatables.min.js',
                'bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
                'bundles/jquery-ui/jquery-ui.min.js',
                'js/page/datatables.js',

            ),
        );

        $this->load->view('restrita/layout/Header', $data);
        $this->load->view('restrita/usuarios/Index');
        $this->load->view('restrita/layout/Settings');
        $this->load->view('restrita/layout/Footer');
    }

    public function core($usuario_id = NULL)
    {

        if (!$usuario_id) {
            //Cadastrar usuário
            exit('Cadastrar usuario');
        } else {
            if (!$usuario = $this->ion_auth->user($usuario_id)->row()) {
                $this->session->set_flashdata('erro', 'Usuário não encontrado');
                redirect('restrita/usuarios');
            } else {
                //Usuario encontrado
                $this->form_validation->set_rules('first_name', 'Nome', 'trim|required|min_length[4]|max_length[45]');
                $this->form_validation->set_rules('last_name', 'Sobrenome', 'trim|required|min_length[4]|max_length[45]');
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_valida_email|min_length[4]|max_length[100]');
                $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[4]|max_length[50]|alpha_dash|callback_valida_usuario');
                $this->form_validation->set_rules('password', 'Senha', 'trim|required|min_length[4]|max_length[200]');
                $this->form_validation->set_rules('confirma_senha', 'Confirmar Senha', 'trim|required|matchs[password]')

                if ($this->form_validation->run()) {
                    echo '<pre>';
                    print_r($this->input->post());
                    exit();
                } else {

                    $data = array(
                        'titulo' => 'Editar usuário',
                        'usuario' => $usuario,
                        'grupos' => $this->ion_auth->groups()->result(),
                        'perfil' => $this->ion_auth->get_users_groups($usuario_id)->row(),
                    );

                    $this->load->view('restrita/layout/Header', $data);
                    $this->load->view('restrita/home/Core');
                    $this->load->view('restrita/layout/Settings');
                    $this->load->view('restrita/layout/Footer');
                }
            }
        }
    }

    public function valida_email($email){
        $usuario_id = $this->input->post('usuario_id');

        if(!$usuario_id){
            //Cadastrando usuario

            if($this->core_model->get_by_id('users', array('email' => $email))){
                $this->form_validation->set_message('valida_email', 'Esse email já existe!');
                return false;
            }else{
                return true;
            }
            
        }else{
            //Editando usuário
            if($this->core_model->get_by_id('users', array('id !=' => $usuario_id, 'email' => $email))){
                $this->form_validation->set_message('valida_email', 'Esse email já existe!');
                return false;
            }else{
                return true;
            }

        }
    }

    public function valida_usuario($username){
        $username_id = $this->input->post('username_id');

        if(!$username_id){
            //Cadastando usuário

            if($this->core_model->get_by_id('users', array('username' => $username))){
                $this->form_validation->set_message('valida_usuario', 'Esse usuário já existe');
                return false;
            }else{
                return true;
            }
        }else{
            //Editanto usuário

            if($this->core_model->get_by_id('users', array('username' => $username, 'id != ' => $username_id))){
                $this->form_validation->set_messege('valida_usuario', 'Esse username já existe!');
                return false;
            }else{
                return true;
            }
        }
    }
}

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
                $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|callback_valida_email|min_length[4]|max_length[100]');
                $this->form_validation->set_rules('username', 'Usuário', 'trim|required|min_length[4]|max_length[50]|alpha_dash|callback_valida_usuario');
                $this->form_validation->set_rules('password', 'Senha', 'trim|min_length[4]|max_length[200]');
                $this->form_validation->set_rules('confirma_senha', 'Confirmar Senha', 'trim|matches[password]');

                if ($this->form_validation->run()) {

                    $data = elements(
                        array(
                            'first_name',
                            'last_name',
                            'email',
                            'username',
                            'password',
                            'active'
                        ),
                        $this->input->post()
                    );

                    $password = $this->input->post('password');

                    // Não altera a senha se a mesma não for passada
                    if (!$password) {
                        unset($data['password']);
                    }

                    // Sanitizando o $data
                    $data = html_escape($data);

                    if ($this->ion_auth->update($usuario_id, $data)) {

                        $perfil = $this->input->post('perfil');
                        print_r($perfil);
                     //   print_r($usuario_id);
                        exit();
                        if ($perfil_id) {
                            $this->ion_auth->remove_from_group(NULL, $usuario_id);
                            $this->ion_auth->add_group($perfil, $usuario_id);
                        }
                        $this->session->set_flashdata('sucesso', 'Dados atualizados com sucesso');
                    } else {
                        $this->session->set_flashdata('erro', $this->ion_auth->erros());
                    }


                    redirect('restrita/usuarios');
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

    public function valida_email($email)
    {
        $usuario_id = $this->input->post('usuario_id');

        if (!$usuario_id) {
            //Cadastrando usuario

            if ($this->core_model->get_by_id('users', array('email' => $email))) {
                $this->form_validation->set_message('valida_email', 'Esse email já existe!');
                return false;
            } else {
                return true;
            }
        } else {
            //Editando usuário
            if ($this->core_model->get_by_id('users', array('id !=' => $usuario_id, 'email' => $email))) {
                $this->form_validation->set_message('valida_email', 'Esse email já existe!');
                return false;
            } else {
                return true;
            }
        }
    }

    public function valida_usuario($username)
    {
        $usuario_id = $this->input->post('usuario_id');

        if (!$usuario_id) {
            //Cadastando usuário

            if ($this->core_model->get_by_id('users', array('username' => $username))) {
                $this->form_validation->set_message('valida_usuario', 'Esse usuário já existe');
                return false;
            } else {
                return true;
            }
        } else {
            //Editanto usuário

            if ($this->core_model->get_by_id('users', array('username' => $username, 'id != ' => $usuario_id))) {
                $this->form_validation->set_messege('valida_usuario', 'Esse username já existe!');
                return false;
            } else {
                return true;
            }
        }
    }
}

<?php 

defined('BASEPATH') OR exit("Ação não permitida");

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

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

    public function core($usuario_id = NULL){

        if(!$usuario_id){
            //Cadastrar usuário
            $this->session->set_flashdata('erro', 'Usuário não cadastrado');
            redirect('restrita/usuarios');

        }else{
            if(!$usuario = $this->ion_auth->user($usuario_id)->row()){
                exit('Não Existe');
            
            }else{
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
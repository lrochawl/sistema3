<?php $this->load->view('restrita/layout/navbar'); ?>
<?php $this->load->view('restrita/layout/sidebar'); ?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <!-- add content here -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-block">
              <h4><?php echo $titulo ?></h4>
              <a class="btn btn-primary float-right" href="<?php echo base_url('restrita/usuarios/core'); ?>">Cadastrar</a>
            </div>
            <div class="card-body">
              <?php if ($message = $this->session->flashdata('sucesso')) : ?>
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                  <div class='alert-icon'><i class="fa fa-check-circle"></i></div>
                  <div class="alert-body">
                    <button class="close" data-dimiss="alert">
                      <span>&times;</span>
                    </button>
                    <div class="alert-title">Perfeito</div>
                    <?= $message; ?>
                  </div>
                </div>
              <?php endif ?>

              <?php if ($message = $this->session->flashdata('erro')) : ?>
                <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                  <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                      <span>&times;</span>
                    </button>
                    <div class="alert-title">Atenção</div>
                    <?= $message ?>
                  </div>
                </div>
              <?php endif ?>
              <div class="table-responsive">
                <table class="table table-striped data-table">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Perfil de acesso</th>
                      <th>Status</th>
                      <th class="nosort">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($usuarios as $usuario) : ?>
                      <tr>
                        <td> <?php echo $usuario->id; ?> </td>
                        <td> <?php echo $usuario->first_name . ' ' . $usuario->last_name; ?> </td>
                        <td> <?php echo $usuario->email; ?> </td>
                        <td> <?php echo ($this->ion_auth->is_admin($usuario->id) ? 'administrador' : 'Clientes'); ?> </td>
                        <td> <?php echo ($usuario->active == 1) ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>'; ?> </td>

                        <td>
                          <a href="<?php echo base_url('restrita/usuarios/core/' . $usuario->id) ?>" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                          <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
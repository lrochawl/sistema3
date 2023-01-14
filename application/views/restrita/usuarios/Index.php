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
                  <div class="card-header">
                    <h4>Basic DataTables</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped data-table" >
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Usuário</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php foreach($usuarios as $usuario):?>
                              <td> <?php echo $usuario->id; ?> </td>
                              <td> <?php echo $usuario->first_name.' '.$usuario->last_name; ?> </td>
                              <td> <?php echo $usuario->email; ?> </td>
                              <td> <?php echo $usuario->username; ?> </td>
                              <td> <?php echo $usuario->active; ?> </td>
                   
                            <td><a href="#" class="btn btn-primary">Detail</a></td>

                            <?php endforeach ?>
                          </tr>
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>


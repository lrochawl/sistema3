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
                            <h4><?php echo $titulo ?></h4>
                        </div>
                        <?php 
                        if (isset($usuario)) {
                            $usuario_id = $usuario->id;
                        } else {
                            $usuario_id = '';
                        }
                        ?>
                        <?php $atributos = array(
                            'name' => 'form_core'
                        );
                        ?>
                        <?php echo form_open('restrita/sistema') ?>
                    
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Razão social</label>
                                        <input type="text" class="form-control" name="sistema_razao_social" value="<?php echo (isset($sistema) ? $sistema->sistema_razao_social : set_value('sistema_razao_social')) ?>">
                                        <?php echo form_error("first_name", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">Salvar</button>
                                <a class="btn btn-dark" href="<?php echo base_url('restrita/usuarios') ?>">Voltar</a>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

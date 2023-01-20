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
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Razão social</label>
                                        <input type="text" class="form-control" name="sistema_razao_social" value="<?php echo (isset($sistema) ? $sistema->sistema_razao_social : set_value('sistema_razao_social')) ?>">
                                        <?php echo form_error("sistema_razao_social", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Nome fantasia</label>
                                        <input type="text" class="form-control" name="sistema_nome_fantasia" value="<?php echo (isset($sistema) ? $sistema->sistema_nome_fantasia : set_value('sistema_nome_fantasia')) ?>">
                                        <?php echo form_error("sistema_nome_fantasia", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">CNPJ</label>
                                        <input type="text" class="form-control cnpj" name="sistema_cnpjsistema_cnpj" value="<?php echo (isset($sistema) ? $sistema->sistema_cnpj : set_value('sistema_cnpj')) ?>">
                                        <?php echo form_error("sistema_cnpj", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Inscrição Estadual</label>
                                        <input type="text" class="form-control" name="sistema_ie" value="<?php echo (isset($sistema) ? $sistema->sistema_ie : set_value('sistema_ie')) ?>">
                                        <?php echo form_error("sistema_ie", "<div class='text-danger'>", "</div>"); ?> 
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

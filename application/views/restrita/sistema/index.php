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
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Telefone fixo</label>
                                        <input type="text" class="form-control phone_with_ddd" name="sistema_telefone_fixo" value="<?php echo (isset($sistema) ? $sistema->sistema_telefone_fixo : set_value('sistema_telefone_fixo')) ?>">
                                        <?php echo form_error("sistema_telefone_fixo", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Telefone móvel</label>
                                        <input type="text" class="form-control sp_celphones" name="sistema_telefone_movel" value="<?php echo (isset($sistema) ? $sistema->sistema_telefone_movel : set_value('sistema_telefone_movel')) ?>">
                                        <?php echo form_error("sistema_telefone_movel", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">E-mail de contato</label>
                                        <input type="email" class="form-control" name="sistema_email" value="<?php echo (isset($sistema) ? $sistema->sistema_email : set_value('sistema_email')) ?>">
                                        <?php echo form_error("sistema_email", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">URL do site</label>
                                        <input type="url" class="form-control" name="sistema_site_url" value="<?php echo (isset($sistema) ? $sistema->sistema_site_url : set_value('sistema_site_url')) ?>">
                                        <?php echo form_error("sistema_site_url", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">CEP</label>
                                        <input type="text" class="form-control phone_with_ddd" name="sistema_cep" value="<?php echo (isset($sistema) ? $sistema->sistema_cep : set_value('sistema_cep')) ?>">
                                        <?php echo form_error("sistema_cep", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Endereço</label>
                                        <input type="text" class="form-control" name="sistema_endereco" value="<?php echo (isset($sistema) ? $sistema->sistema_endereco : set_value('sistema_endereco')) ?>">
                                        <?php echo form_error("sistema_endereco", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Numero</label>
                                        <input type="email" class="form-control" name="sistema_numero" value="<?php echo (isset($sistema) ? $sistema->sistema_numero : set_value('sistema_numero')) ?>">
                                        <?php echo form_error("sistema_numero", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Cidade</label>
                                        <input type="url" class="form-control" name="sistema_cidade" value="<?php echo (isset($sistema) ? $sistema->sistema_cidade : set_value('sistema_cidade')) ?>">
                                        <?php echo form_error("sistema_cidade", "<div class='text-danger'>", "</div>"); ?> 
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">UF</label>
                                        <input type="text" class="form-control" name="sistema_estado" value="<?php echo (isset($sistema) ? $sistema->sistema_estado : set_value('sistema_estado')) ?>">
                                        <?php echo form_error("sistema_estado", "<div class='text-danger'>", "</div>"); ?> 
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

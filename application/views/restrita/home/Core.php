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
                            <?php print_r($perfil) ?>
                        </div>
                        <form name="form_core">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Nome</label>
                                        <input type="text" class="form-control" name="first_name" value="<?php echo (isset($usuario) ? $usuario->first_name : '') ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Sobrenome</label>
                                        <input type="text" class="form-control" name="last_name" value="<?php echo (isset($usuario) ? $usuario->last_name : '') ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">E-mail</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo (isset($usuario) ? $usuario->email : '') ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Usuário</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo (isset($usuario) ? $usuario->email : '') ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Senha</label>
                                        <input type="text" class="form-control" name="active">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Confirma senha</label>
                                        <input type="email" class="form-control" name="confirma_senha">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Status</label>
                                        <select id="inputState" class="form-control" name="active">

                                            <?php if (isset($usuario)) : ?>
                                                <option value='1' <?php echo ($usuario->active == 1) ? 'selected' : ''; ?>>Sim</option>
                                                <option value='0' <?php echo ($usuario->active == 0) ? 'selected' : ''; ?>>Não</option>

                                            <?php else : ?>
                                                <option value='1'>Sim</option>
                                                <option value='0'>Não</option>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Perfil de acesso</label>
                                        <select id="inputState" class="form-control" name="group">
                                            <option selected>Cliente</option>
                                            <option>Administrador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
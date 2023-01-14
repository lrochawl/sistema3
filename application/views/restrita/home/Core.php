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
                        <div class="card-body">

                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Nome</label>
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Sobrenome</label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">E-mail</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Senha</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Confirmar senha</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group form-group col-md-8">
                                    <label for="inputAddress">Rua</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group form-group col-md-4">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<?php $this->load->view('restrita/layout/navbar'); ?>

<?php $this->load->view('restrita/layout/sidebar'); ?>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">

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
            <!-- add content here -->

            <?php echo '<pre>' ?>
            <?php print_r($this->session->userdata());
           
            ?>

        </div>
    </section>